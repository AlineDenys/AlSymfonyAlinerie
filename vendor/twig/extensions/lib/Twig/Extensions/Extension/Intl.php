<?php

/*
 * This file is part of Twig.
 *
 * (c) 2010 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Extensions_Extension_Intl extends Twig_Extension
{
    public function __construct()
    {
        if (!class_exists('IntlDateFormatter')) {
            throw new RuntimeException('The intl extension is needed to use intl-based filters.');
        }
    }

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array An array of filters
     */
    public function getFilters()
    {
        return array(
            new Twig_SimpleFilter('localizeddate', 'twig_localized_date_filter', array('needs_environment' => true)),
            new Twig_SimpleFilter('localizednumber', 'twig_localized_number_filter'),
            new Twig_SimpleFilter('localizedcurrency', 'twig_localized_currency_filter'),
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'intl';
    }
}

function twig_localized_date_filter(Twig_Environment $env, $date, $dateFormat = 'medium', $timeFormat = 'medium', $locale = null, $timezone = null, $format = null)
{
    $date = twig_date_converter($env, $date, $timezone);

    $formatValues = array(
        'none'   => IntlDateFormatter::NONE,
        'short'  => IntlDateFormatter::SHORT,
        'medium' => IntlDateFormatter::MEDIUM,
        'long'   => IntlDateFormatter::LONG,
        'full'   => IntlDateFormatter::FULL,
    );

    $formatter = IntlDateFormatter::create(
        $locale,
        $formatValues[$dateFormat],
        $formatValues[$timeFormat],
        $date->getTimezone()->getName(),
        IntlDateFormatter::GREGORIAN,
        $format
    );

    return $formatter->format($date->getTimestamp());
}

function twig_localized_number_filter($number, $style = 'decimal', $type = 'default', $locale = null)
{
    static $typeValues = array(
        'default'   => NumberFormatter::TYPE_DEFAULT,
        'int32'     => NumberFormatter::TYPE_INT32,
        'int64'     => NumberFormatter::TYPE_INT64,
        'double'    => NumberFormatter::TYPE_DOUBLE,
        'currency'  => NumberFormatter::TYPE_CURRENCY,
    );

    $formatter = twig_get_number_formatter($locale, $style);

    if (!isset($typeValues[$type])) {
        throw new Twig_Error_Syntax(sprintf('The type "%s" does not exist. Known types are: "%s"', $type, implode('", "', array_keys($typeValues))));
    }

    return $formatter->format($number, $typeValues[$type]);
}

function twig_localized_currency_filter($number, $currency = null, $locale = null)
{
    $formatter = twig_get_number_formatter($locale, 'currency');

    return $formatter->formatCurrency($number, $currency);
}

/**
 * Gets a number formatter instance according to given locale and formatter
 *
 * @param  string $locale Locale in which the number would be formatted
 * @param  int    $style  Style of the formatting
 *
 * @return NumberFormatter A NumberFormatter instance
 */
function twig_get_number_formatter($locale, $style)
{
    static $formatter, $currentStyle;

    $locale = $locale !== null ? $locale : Locale::getDefault();

    if ($formatter && $formatter->getLocale() === $locale && $currentStyle === $style) {
        // Return same instance of NumberFormatter if parameters are the same
        // to those in previous call
        return $formatter;
    }

    static $styleValues = array(
        'decimal'       => NumberFormatter::DECIMAL,
        'currency'      => NumberFormatter::CURRENCY,
        'percent'       => NumberFormatter::PERCENT,
        'scientific'    => NumberFormatter::SCIENTIFIC,
        'spellout'      => NumberFormatter::SPELLOUT,
        'ordinal'       => NumberFormatter::ORDINAL,
        'duration'      => NumberFormatter::DURATION,
    );

    if (!isset($styleValues[$style])) {
        throw new Twig_Error_Syntax(sprintf('The style "%s" does not exist. Known styles are: "%s"', $style, implode('", "', array_keys($styleValues))));
    }

    $currentStyle = $style;

    $formatter = NumberFormatter::create($locale, $styleValues[$style]);

    return $formatter;
}

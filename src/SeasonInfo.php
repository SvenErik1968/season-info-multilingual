<?php
/**
 * Season Info (Multilingual)
 *
 * Translates name of season to 16 languages and scripts.
 *
 * @version    1.0 (2017-05-04 01:01:00 GMT)
 * @author     Peter Kahl <peter.kahl@colossalmind.com>
 * @since      2017
 * @license    Apache License, Version 2.0
 *
 * Copyright 2017 Peter Kahl <peter.kahl@colossalmind.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      <http://www.apache.org/licenses/LICENSE-2.0>
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace peterkahl\SeasonInfo;

use \Exception;

class SeasonInfo {

  #===================================================================

  private static function ValidateLanguage($lang) {
    $available = array(
      'ar',
      'cs',
      'da',
      'de',
      'en',
      'en-gb',
      'en-us',
      'es',
      'fr',
      'he',
      'it',
      'ja',
      'nl',
      'pt',
      'ru',
      'sk',
      'zh-cn',
      'zh-hk',
    );
    $lang = self::denormaliseLangcode($lang);
    if ($lang == 'zh-tw' || $lang == 'zh-mo') {
      $lang = 'zh-hk';
    }
    if ($lang == 'zh-sg' || $lang == 'zh') {
      $lang = 'zh-cn';
    }
    if (in_array($lang, $available)) {
      return $lang;
    }
    $lang = substr($lang, 0, 2);
    if (in_array($lang, $available)) {
      return $lang;
    }
    throw new Exception('Invalid argument lang');
  }

  #===================================================================

  /**
   * turns en_GB --> en-gb
   *
   */
  private static function denormaliseLangcode($str) {
    $str = strtolower($str);
    return str_replace('_', '-', $str);
  }

  #===================================================================

  public static function getName($key, $lang = 'en') {
    $lang = self::ValidateLanguage($lang);
    #----
    if ($lang == 'zh-hk') {
      $text = array(
        'spring' => '春天',
        'summer' => '夏季',
        'autumn' => '秋季',
        'winter' => '冬季',
      );
    }
    elseif ($lang == 'zh-cn') {
      $text = array(
        'spring' => '春天',
        'summer' => '夏季',
        'autumn' => '秋季',
        'winter' => '冬季',
      );
    }
    elseif ($lang == 'ja') {
      $text = array(
        'spring' => '春',
        'summer' => '夏',
        'autumn' => '秋',
        'winter' => '冬',
      );
    }
    elseif ($lang == 'da') {
      $text = array(
        'spring' => 'forår',
        'summer' => 'sommer',
        'autumn' => 'efterår',
        'winter' => 'vinter',
      );
    }
    elseif ($lang == 'he') {
      $text = array(
        'spring' => 'האביב',
        'summer' => 'הקיץ',
        'autumn' => 'סתיו',
        'winter' => 'חורף',
      );
    }
    elseif ($lang == 'ar') {
      $text = array(
        'spring' => 'ربيع',
        'summer' => 'الصيف',
        'autumn' => 'فصل الخريف',
        'winter' => 'شتاء',
      );
    }
    elseif ($lang == 'de') {
      $text = array(
        'spring' => 'Frühling',
        'summer' => 'Sommer',
        'autumn' => 'Herbst',
        'winter' => 'Winter',
      );
    }
    elseif ($lang == 'fr') {
      $text = array(
        'spring' => 'printemps',
        'summer' => 'été',
        'autumn' => 'automne',
        'winter' => 'hiver',
      );
    }
    elseif ($lang == 'es') {
      $text = array(
        'spring' => 'primavera',
        'summer' => 'verano',
        'autumn' => 'otoño',
        'winter' => 'invierno',
      );
    }
    elseif ($lang == 'pt') {
      $text = array(
        'spring' => 'primavera',
        'summer' => 'verão',
        'autumn' => 'outono',
        'winter' => 'inverno',
      );
    }
    elseif ($lang == 'it') {
      $text = array(
        'spring' => 'primavera',
        'summer' => 'estate',
        'autumn' => 'autunno',
        'winter' => 'inverno',
      );
    }
    elseif ($lang == 'nl') {
      $text = array(
        'spring' => 'lente',
        'summer' => 'zomer',
        'autumn' => 'herfst',
        'winter' => 'winter',
      );
    }
    elseif ($lang == 'ru') {
      $text = array(
        'spring' => 'весна',
        'summer' => 'лето',
        'autumn' => 'осень',
        'winter' => 'зима',
      );
    }
    elseif ($lang == 'cs') {
      $text = array(
        'spring' => 'jaro',
        'summer' => 'léto',
        'autumn' => 'podzim',
        'winter' => 'zima',
      );
    }
    elseif ($lang == 'sk') {
      $text = array(
        'spring' => 'jar',
        'summer' => 'leto',
        'autumn' => 'jeseň',
        'winter' => 'zima',
      );
    }
    elseif ($lang == 'en-gb') {
      $text = array(
        'spring' => 'spring',
        'summer' => 'summer',
        'autumn' => 'autumn',
        'winter' => 'winter',
      );
    }
    elseif ($lang == 'en-us' || $lang == 'en') {
      $text = array(
        'spring' => 'spring',
        'summer' => 'summer',
        'autumn' => 'fall',
        'winter' => 'winter',
      );
    }
    #----
    $key = strtolower($key);
    if (!array_key_exists($key, $text)) {
      throw new Exception('Illegal value key');
    }
    return $text[$key];
  }

  #===================================================================

}
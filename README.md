# Season names in 18 languages

[![Downloads](https://img.shields.io/packagist/dt/peterkahl/season-info-multilingual.svg)](https://packagist.org/packages/peterkahl/season-info-multilingual)
[![License](http://img.shields.io/:license-apache-blue.svg)](http://www.apache.org/licenses/LICENSE-2.0.html)
[![If this project has business value for you then don't hesitate to support me with a small donation.](https://img.shields.io/badge/Donations-via%20Paypal-blue.svg)](https://www.paypal.me/PeterK93)

Translates name of season into 19 languages and scripts.

* Arabic (عربى)
* Czech (čeština)
* German (Deutsch)
* Danish (dansk)
* English GB
* English US
* Spanish (Español)
* French (français)
* Hebrew (עִברִית)
* Italian (italiano)
* Japanese (日本語)
* Dutch (Nederlands)
* Norwegian (norsk)
* Portuguese (Português)
* Russian (русский)
* Slovak (slovenčina)
* Chinese simplified (中文简体)
* Chinese traditional (中文繁體)
* Welsh (Cymraeg)

## Usage

```php
usee peterkahl\SeasonInfo\SeasonInfo;

echo SeasonInfo::getName('autumn', 'en-us'); # fall

echo SeasonInfo::getName('autumn', 'en-gb'); # autumn

echo SeasonInfo::getName('spring', 'it');    # primavera

echo SeasonInfo::getName('spring', 'fr');    # printemps

echo SeasonInfo::getName('spring', 'ru');    # весна

echo SeasonInfo::getName('spring', 'cy');    # gwanwyn

echo SeasonInfo::getName('spring', 'zh-cn'); # 春天

echo SeasonInfo::getName('winter', 'ja');    # 冬

```

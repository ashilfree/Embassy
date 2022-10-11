<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'beberlei/doctrineextensions' => 'v1.3.0@008f162f191584a6c37c03a803f718802ba9dd9a',
  'cocur/slugify' => 'v4.1.0@2611e6081dbbb05837a16ed339c0451923d4046e',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '1.13.0@56cd022adb5514472cb144c087393c1821911d09',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.13.9@c480849ca3ad6706a39c970cdfe6888fa8a058b8',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/doctrine-bundle' => '2.3.2@d6b3c37804539a24ba8a7d647a6144cab2f13242',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.4@4bd5c1cdfcd00e9e2d8c484f79150f67e5d355d9',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/migrations' => '3.1.5@537a847ec5525f50f927702fa01b97bacdc2c636',
  'doctrine/orm' => '2.7.5@01187c9260cd085529ddd1273665217cae659640',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'easycorp/easyadmin-bundle' => 'v3.1.0@2e2ce26b1671a56b14cf1dff0c035b2a7ebb43cd',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'friendsofphp/proxy-manager-lts' => 'v1.0.12@8419f0158715b30d4b99a5bd37c6a39671994ad7',
  'friendsofsymfony/ckeditor-bundle' => '2.4.0@a4df4056b2832881e17b939e83f25406a6cc6414',
  'helios-ag/fm-elfinder-bundle' => '10.1@0c35db5ae1d758baf6970765456f87aec3de347b',
  'imagine/imagine' => '1.3.2@ae864f26afbf8859ebd2e2b9df92d77ee175dc13',
  'jms/metadata' => '2.6.1@c3a3214354b5a765a19875f7b7c5ebcd94e462e5',
  'knplabs/knp-components' => 'v3.0.2@7db2eb032591ded5809455af8a4dfdfda079041c',
  'knplabs/knp-paginator-bundle' => 'v5.7.0@d5608abc236b6896a413a924a6637738da9705eb',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'liip/imagine-bundle' => '2.7.1@f15570747af01c5a8b3907e1c3f72b1664a99608',
  'monolog/monolog' => '2.6.0@247918972acd74356b0a91dfaa5adcaec069b6c0',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.1@77a32518733312af16a44300404e945338981de3',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'spe/filesize-extension-bundle' => '2.0.0@0fd58de2b7bea56442b133c22d1d36b498323fe3',
  'studio-42/elfinder' => '2.1.61@33bee2654615db62e9b722efb4fdd2a21844fbb2',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/asset' => 'v5.1.11@54a42aa50f9359d1184bf7e954521b45ca3d5828',
  'symfony/cache' => 'v5.1.11@6def7595e74b4b0a6b515af964792e2d092f056d',
  'symfony/cache-contracts' => 'v2.5.1@64be4a7acb83b6f2bf6de9a02cee6dad41277ebc',
  'symfony/config' => 'v5.1.11@96cc8f6e3b2dccf471b0816df8e421142dc74c18',
  'symfony/console' => 'v5.1.11@d9a267b621c5082e0a6c659d73633b6fd28a8a08',
  'symfony/dependency-injection' => 'v5.1.11@176e622d476133152a9346b0fbd8fb9b60ff6fb3',
  'symfony/deprecation-contracts' => 'v2.5.1@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/doctrine-bridge' => 'v5.1.11@290deda49060e6694f151ac4aa889467935ee3ea',
  'symfony/dotenv' => 'v5.1.11@783f12027c6b40ab0e93d6136d9f642d1d67cd6b',
  'symfony/error-handler' => 'v5.1.11@c2bdf8d374de3f33c525460929f82a9902f6e1c5',
  'symfony/event-dispatcher' => 'v5.1.11@c00f3aae24577a991ae97d34c7033b2e84f1cfa0',
  'symfony/event-dispatcher-contracts' => 'v2.5.1@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/expression-language' => 'v5.1.11@13a16b1cc6e4fd4998631bfdf568d47e48844ec1',
  'symfony/filesystem' => 'v5.1.11@262d033b57c73e8b59cd6e68a45c528318b15038',
  'symfony/finder' => 'v5.1.11@196f45723b5e618bf0e23b97e96d11652696ea9e',
  'symfony/flex' => 'v1.18.7@e74319d17ed4edc5f27b9d24757e172930a7ebc4',
  'symfony/form' => 'v5.1.11@b794bed839f11bcee9a9f30daa5cb88d311dd409',
  'symfony/framework-bundle' => 'v5.1.11@b40931adcd8386901a65b472d8ba9f34cac80070',
  'symfony/http-client' => 'v5.1.11@82f87fa4b738977937803ab8d52948d490047564',
  'symfony/http-client-contracts' => 'v2.5.1@1a4f708e4e87f335d1b1be6148060739152f0bd5',
  'symfony/http-foundation' => 'v5.1.11@1c1920364e205f9aab12457e52b884ebd198b885',
  'symfony/http-kernel' => 'v5.1.11@1b57aaf3215c4313fec1409afdb5046dcb201d17',
  'symfony/intl' => 'v5.1.11@930f17689729cc47d2ce18be21ed403bcbeeb6a9',
  'symfony/mailer' => 'v5.1.11@3c7ab7a402acdb453dcdd6e0b2982caacfcc9b9f',
  'symfony/mime' => 'v5.1.11@d7d899822da1fa89bcf658e8e8d836f5578e6f7a',
  'symfony/monolog-bridge' => 'v5.1.11@ce37f72dd09e38d65dd6d57a0c17e874c4c689a5',
  'symfony/monolog-bundle' => 'v3.8.0@a41bbcdc1105603b6d73a7d9a43a3788f8e0fb7d',
  'symfony/notifier' => 'v5.1.11@c2ccb5b6f9b7a316b3bfefc5fec751540d620d3c',
  'symfony/options-resolver' => 'v5.1.11@c67e38bab7b561a65e34162a48ae587750f7ae0e',
  'symfony/polyfill-intl-grapheme' => 'v1.25.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.25.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.25.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.25.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.25.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php73' => 'v1.25.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.25.0@4407588e0d3f1f52efb65fbe92babe41f37fe50c',
  'symfony/polyfill-uuid' => 'v1.25.0@7529922412d23ac44413d0f308861d50cf68d3ee',
  'symfony/process' => 'v5.1.11@d279ae7f2d6e0e4e45f66de7d76006246ae00e4d',
  'symfony/property-access' => 'v5.1.11@d99f6d52333d0798a3b5bb3a81bae789e96bae93',
  'symfony/property-info' => 'v5.1.11@d4981d21891987fce806fc94e41312fe9c131747',
  'symfony/routing' => 'v5.1.11@e7f71f5da6af8b238f2257670fd6aa4ae6263826',
  'symfony/security-bundle' => 'v5.1.11@911f6b515d515c12a4aea749b6ac688050b6a85c',
  'symfony/security-core' => 'v5.1.11@33a6d376ef0502f18bc498a076590372685f6e89',
  'symfony/security-csrf' => 'v5.1.11@e22ef49d5d3773014942f3dfe301b168a4a833dc',
  'symfony/security-guard' => 'v5.1.11@23e2b838d255f2695a143cf4ad138c58c4dc2918',
  'symfony/security-http' => 'v5.1.11@c3a869cc01640d14ebbbfd03046f494103ffb2fa',
  'symfony/serializer' => 'v5.1.11@76404a1e1a4eaefe94ce12740af1884149d47d96',
  'symfony/service-contracts' => 'v2.5.1@24d9dc654b83e91aa59f9d167b131bc3b5bea24c',
  'symfony/stopwatch' => 'v5.1.11@40e7945f2d0f72427eb71b54c26d93d08ef88793',
  'symfony/string' => 'v5.1.11@83bbb92d34881744b8021452a76532b28283dbfb',
  'symfony/swiftmailer-bundle' => 'v3.5.4@9daab339f226ac958192bf89836cb3378cc0e652',
  'symfony/translation' => 'v5.1.11@b16d3e4b2d3f78fb2444aa8d19019f033e55ec56',
  'symfony/translation-contracts' => 'v2.5.1@1211df0afa701e45a04253110e959d4af4ef0f07',
  'symfony/twig-bridge' => 'v5.1.11@4421afc6e1a0ef5e7cd9b32359617b98069d1666',
  'symfony/twig-bundle' => 'v5.1.11@88e5d5232f11f6db6610d5f4c2380f26e02ce92e',
  'symfony/uid' => 'v5.1.11@c679017d2c9cf5fffdc6796059c6d85bff63f016',
  'symfony/validator' => 'v5.1.11@c651438e159bdcbe8354320ab627d33fa7e288ff',
  'symfony/var-dumper' => 'v5.1.11@cee600a1248b423330375c869812bdd61a085cd0',
  'symfony/var-exporter' => 'v5.1.11@5aed4875ab514c8cb9b6ff4772baa25fa4c10307',
  'symfony/web-link' => 'v5.1.11@28e6bd9028740602c158f5c6ac8d5e2a2692812e',
  'symfony/yaml' => 'v5.1.11@6bb8b36c6dea8100268512bf46e858c8eb5c545e',
  'tattali/calendar-bundle' => 'v1.2.3@efb64931ed6343b714fbdc422e121070d29ccdd3',
  'twig/extra-bundle' => 'v3.4.0@2e58256b0e9fe52f30149347c0547e4633304765',
  'twig/twig' => 'v3.4.1@e939eae92386b69b49cfa4599dd9bead6bf4a342',
  'vich/uploader-bundle' => '1.19.1@044940a35020daac2f2591c5b473d5216071a5ea',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'doctrine/data-fixtures' => '1.5.3@ba37bfb776de763c5bf04a36d074cd5f5a083c42',
  'doctrine/doctrine-fixtures-bundle' => '3.4.2@601988c5b46dbd20a0f886f967210aba378a6fd5',
  'symfony/browser-kit' => 'v5.1.11@8d0688f6f7c733ff4096d64656c8a3b320d9a1f8',
  'symfony/css-selector' => 'v5.1.11@f65f217b3314504a1ec99c2d6ef69016bb13490f',
  'symfony/debug-bundle' => 'v5.1.11@cc01b42c54ca5a3eed3e48f0c2327e1b3d46c16b',
  'symfony/dom-crawler' => 'v5.1.11@5d89ceb53ec65e1973a555072fac8ed5ecad3384',
  'symfony/maker-bundle' => 'v1.39.0@f2b99ba44e22a44fcf724affa53b5539b25fde90',
  'symfony/phpunit-bridge' => 'v5.4.8@cec05218b4fd847b87dce5b3560b288096c36950',
  'symfony/web-profiler-bundle' => 'v5.1.11@9a906203efff7df59d1e0185f7aa05e631eb4ef7',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}

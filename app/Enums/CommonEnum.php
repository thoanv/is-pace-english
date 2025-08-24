<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CommonEnum extends Enum
{
    const ACTIVATED = 'activated';
    const UNACTIVATED = 'unactivated';

    const ZONE = 'zone';
    const CENTER = 'center';
    const HO = 'ho';

    public const TypeCenter =
        [
            self::CENTER => 'Trung tâm',
            self::ZONE => 'Vùng',
//            self::HO => 'Hội sở',
        ];
}

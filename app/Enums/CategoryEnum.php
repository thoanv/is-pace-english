<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CategoryEnum extends Enum
{
    const TUYEN_DUNG = 'recruitment';
    const GIOI_THIEU = 'introduce';
    const TIN_TUC = 'news';
    const KHOA_HOC = 'course';
    const CO_SO = 'center';
    const LIEN_HE = 'contact';

    public const TypeCategory =
        [
            self::TIN_TUC => 'Tin tức',
            self::GIOI_THIEU => 'Giới thiệu',
            self::TUYEN_DUNG => 'Tuyển dụng',
            self::KHOA_HOC => 'Khóa học',
            self::CO_SO => 'Cơ sở',
            self::LIEN_HE => 'Liên hệ',
        ];
}

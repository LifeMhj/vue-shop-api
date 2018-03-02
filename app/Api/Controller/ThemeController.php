<?php

namespace App\Api\Controller;

use App\Api\BaseController;
use App\Models\Theme;

class ThemeController extends BaseController
{
    public function getThemes()
    {
        $parameters = [
            'paginate' => request('per_page')
        ];
        $theme = Theme::getThemes($parameters);
        return self::success($theme,'查询成功');
    }
}
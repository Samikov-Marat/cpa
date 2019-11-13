<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;

use app\common\Parser;

class BannerParserController extends Controller
{
    public function actionIndex(){
        $parser = new Parser();
        $parser->parse();

        return ExitCode::OK;
    }
}
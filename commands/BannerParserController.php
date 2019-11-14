<?php

namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use app\common\Parser;
use app\common\Report;

class BannerParserController extends Controller
{
    public function actionIndex(){
        $parser = new Parser();
        $parser->parse();

        Report::send();

        return ExitCode::OK;
    }
}
<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        
        try {
            $param = request()->param();
            // 读模板
            $tpl = file_get_contents('../template/' . env('TPL_NAME') . '-tpl.tex');
            // 创建文件咯
            $tpl = str_replace('{{ preamble }}', $param['preamble'], $tpl);
            $tpl = str_replace('{{ content }}', $param['content'], $tpl);
            file_put_contents('./latex/main.tex', $tpl);
    
            // 编译
            $command = 'pdflatex ' . '--interaction=nonstopmode --output-directory=./latex/ ./latex/main.tex';
            exec($command, $output, $falg);
            if($falg == 0) {
                return $falg;
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}

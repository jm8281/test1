<?php


class SurveyController extends BaseController
{
    public function __construct()
    {
        $this->beforefilter('auth',array('except'=>array('Survey','SubmitSurvey')));
        $this->beforefilter('csrf',array('on'=>'post'));
    }

    /**
     * 问卷列表
     */
    public function getIndex()
    {
        $surveys = Survey::orderby('created_at','desc')->paginate(100);
        return View::make('admin.survey.index')->with('surveys',$surveys);
    }

    public function getExport()
    {
        return "导出csv文件";
    }

    //前台首页
    public function Survey($email = '')
    {
        return View::make('front.survey')->with('email',$email);
    }

    //提交问卷
    public function SubmitSurvey()
    {
        return "提交完成";
    }
}
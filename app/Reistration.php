<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reistration extends Model
{
    public $fillable = [
        'reg_date','passport', 'diet', 
        'firstname','lastname','othername', 
        'gender', 'sponsor', 'homeaddress',
         'employer', 'phonenumber', 'email', 
         'qualifications', 'trainingmethod', 
         'trainingtype', 'maritalstatus', 
         'howdidyouknow', 'studentStatus', 
         'ihaveread', 'types', 'total','payment',
          'foreignexam', 'foreignType', 
          'foreignTypePayment', 'foreignTotal',
          'exam_select','exam_select2', 'exam_select3'
        ];
}

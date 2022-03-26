<?php
namespace App\Utils;
class OperationalType{
    const STATUSES = [
        'on-duty', 'on-leave', 'on-retired','on-transfer'
    ];
    const PRE_PROCESSING ='PRE-PROCESSING';
    const POST_PROCESSING ='POST-PROCESSING';
    const PRE_ESTABLISHMENT ='PRE-ESTABLISHMENT';
    const POST_ESTABLISHMENT ='POST_ESTABLISHMENT';
    const POST_COMMENCEMENT='POST_COMMENCEMENT';

}

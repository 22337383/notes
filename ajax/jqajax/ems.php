<?php

$code = $_GET['code'];
$cb = $_GET['cb'];


$result = '{
    "msg": "",
    "status": "0",
    "data": {
        "info": {
            "status": "1",
            "com": "ems",
            "state": "3",
            "context": [
                {
                    "time": "1450252800",
                    "desc": "【龙锦苑投递组】 已签收,他人收[龙锦苑投递组]"
                },
                {
                    "time": "1450172897",
                    "desc": "【龙锦苑投递组】 预约2015.12.16再投[龙锦苑投递组]"
                },
                {
                    "time": "1450153979",
                    "desc": "【龙锦苑投递组】 [龙锦苑投递组10220812]正在投递"
                },
                {
                    "time": "1450088166",
                    "desc": "【龙锦苑投递组】 预约2015.12.15再投[龙锦苑投递组]"
                },
                {
                    "time": "1450062684",
                    "desc": "【龙锦苑投递组】 [龙锦苑投递组10220812]正在投递"
                },
                {
                    "time": "1450000825",
                    "desc": "【龙锦苑投递组】 到达[龙锦苑投递组10220812]"
                },
                {
                    "time": "1449887960",
                    "desc": "【天通西苑投递组】 转他局处理,原因:非本站试他局[天通西苑投递组]"
                },
                {
                    "time": "1449886219",
                    "desc": "【天通西苑投递组】 [天通西苑投递组10221806]正在投递"
                },
                {
                    "time": "1449871677",
                    "desc": "【天通西苑投递组】 到达[天通西苑投递组10221806]"
                },
                {
                    "time": "1449866125",
                    "desc": "【北京】 离开[北京10000000]，下一站是[京天通西],总包[5602],邮路[沙河-J1]"
                },
                {
                    "time": "1449838500",
                    "desc": "【北京市】 [北京市10000000]已经封发,总包[5602]"
                },
                {
                    "time": "1449827400",
                    "desc": "【亚运村邮局大宗二组】 离开[亚运村邮局大宗二组10010120]，下一站是[北京市],总包[5434],邮路[商函-小包出口]"
                },
                {
                    "time": "1449820658",
                    "desc": "【亚运村邮局大宗二组】 [北京市亚运村邮局大宗二组10010120]已经收寄"
                }
            ],
            "_source_com": ""
        },
        "com": "ems",
        "company": {
            "url": "http://www.kuaidi100.com/all/ems.shtml?from=openv",
            "fullname": "EMS",
            "shortname": "EMS",
            "icon": {
                "id": "2",
                "smallurl": "https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=1807529516,3291075151&fm=58",
                "smallpos": "0,944",
                "middleurl": "https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=1835223070,3312272045&fm=58",
                "middlepos": "0,828",
                "normal": "https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=295567570,1377797753&fm=58"
            },
            "website": {
                "title": "www.ems.com.cn",
                "url": "http://www.ems.com.cn/"
            },
            "tel": "11183",
            "auxiliary": [
                {
                    "title": "网点查询",
                    "url": "http://www.ems.com.cn/serviceguide/tong_da_fan_wei.html"
                },
                {
                    "title": "网上寄件",
                    "url": "http://www.ems.com.cn/serviceguide/zifeichaxun/zi_fei_biao_zhun.html"
                }
            ]
        },
        "source": {
            "logo": "https://ss2.baidu.com/6ONYsjip0QIZ8tyhnq/it/u=1429564979,1787167512&fm=58",
            "title": "数据来自快递100",
            "url": "http://www.kuaidi100.com/",
            "name": "快递100"
        }
    }
}';

if($code == '9971121346085'){
	echo $cb.'('.$result.')';
}else{
	echo $cb.'('.'{"msg":" 该单号暂无物流进展，请稍后再试，或检查公司和单号是否有误","status":"-2"}'.')';
}





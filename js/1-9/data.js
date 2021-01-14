const week = [
    '星期日',
    '星期一',
    '星期二',
    '星期三',
    '星期四',
    '星期五',
    '星期六',
]

function getDate()
{
    var t = new Date()
    var year = t.getFullYear()          //年
    //console.log(year)
    var month = t.getMonth() + 1               //月
    //console.log(month)
    var day = t.getDate()           //日
    //console.log(day)
    var w = t.getDay()          //周x

    var hour = t.getHours()         //时
    if(hour<10){hour='0'+hour}
    //console.log(hour)

    var minute = t.getMinutes()     //分
    if(minute<10){minute='0'+minute}
    //console.log(minute)

    var second = t.getSeconds()     //秒
    if(second<10){second='0'+second}
    //console.log(second)

    var ymdhis = year + '-' + month + '-' + day + " " + hour + ':' + minute + ':' + second + " " + week[w]
    //console.log(ymdhis)
    return ymdhis
}

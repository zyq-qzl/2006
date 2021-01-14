function getDate2(seconds){

    //秒转天
    var d = seconds / 86400
    d = Math.floor(d)

    //小时
    var h = seconds / 3600
    h = Math.floor(h) % 24

    //分钟
    var i = seconds / 60
    i = Math.floor(i) % 60

    //秒
    s = seconds % 60

    return d + "天" + h + "小时" + i + "分钟" + s + "秒";
}
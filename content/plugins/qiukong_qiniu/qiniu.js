function qiniu_cpick(){
if(!document.getElementById('qiniu_pick').files.length){return;}
qiniu_pool=[];qiniu_skep=[];Array.prototype.push.apply(qiniu_pool,document.getElementById('qiniu_pick').files);
document.getElementById('qiniu_push').disabled=false;
document.getElementById('qiniu_list').innerHTML='';
for(var numb=0;numb<qiniu_pool.length;numb++){
document.getElementById('qiniu_list').innerHTML+='<div class="qiniu_pic" id="qiniu_pic'+numb+'"><div class="qiniu_act" id="qiniu_act'+numb+'"><a>'+qiniu_pool[numb].name.substr(0,18)+'...</a></div></div>';
}
}
function qiniu_cpush(){
if(!qiniu_token){alert('密钥为空');return;}
if(!qiniu_pool.length){alert('没有文件');return;}
document.getElementById('qiniu_push').disabled=true;
qiniu_cpost(0);
}
function qiniu_cpost(numb){
if(numb>=qiniu_pool.length){alert('任务结束');return;}
var xhr=new XMLHttpRequest();
xhr.open('POST',qiniu_upurl,true);
xhr.upload.onprogress=function(e){if(e.lengthComputable){document.getElementById('qiniu_act'+numb).innerHTML='<a>'+parseInt(100*e.loaded/e.total)+'%</a>';}}
xhr.onerror=function(e){alert('执行中断');return;}
xhr.onreadystatechange=function(e){if(xhr.readyState===4 && xhr.status===200){
qiniu_skep[numb]=JSON.parse(xhr.responseText).key;
document.getElementById('qiniu_act'+numb).innerHTML='<a href="javascript:void(0);" onclick="qiukong_qiniu_cpone('+numb+',\'\');">上传成功</a>';
document.getElementById('qiniu_pic'+numb).setAttribute('style','background:url('+qiniu_dnurl+qiniu_skep[numb]+'?imageView/2/w/'+qiniu_thumb+') no-repeat center;background-size:cover;');
qiniu_cpost(numb+1);
}}
var upqk=new FormData();
upqk.append('token',qiniu_token);
upqk.append('file',qiniu_pool[numb]);
xhr.send(upqk);
}
var qiniu_pool=[],qiniu_skep=[];
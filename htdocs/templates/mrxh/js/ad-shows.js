function initPicPlayer(pics,w,h)
{
//ѡ�е�ͼƬ
var selectedItem;

//ѡ�еİ�ť
var selectedBtn;

//�Զ����ŵ�id
var playID;

//ѡ��ͼƬ������
var selectedIndex;

//����
var p = $('#ad1containert');

 

p.text('');

 

p.append('<div id="piccontent"></div>');

 

var c = $('#piccontent');

 
for(var i=0;i<pics.length;i++)
{
//���ͼƬ��������
c.append('<a href="'+pics[i].link+'" target="_blank"><img id="picitem'+i+'" style="display: none;z-index:'+i+'" src="'+pics[i].url+'" /></a>');
}

 

//��ť���������Զ�λ�����½�
p.append('<div id="picbtnHolder" style="position:absolute;top:'+(h-25)+'px;width:'+w+'px;height:20px;z-index:10000;"></div>');

//

var btnHolder = $('#picbtnHolder');

btnHolder.append('<div id="picbtns" style="float:right; padding-right:1px;"></div>');

var btns = $('#picbtns');

//

for(var i=0;i<pics.length;i++)
{

  //����ͼƬ��Ӧ�İ�ť

  btns.append('<span id="picbtn'+i+'" style="cursor:pointer; border:solid 1px #ccc;background-color:#eee; display:inline-block;"> '+(i+1)+' </span> ');

  $('#picbtn'+i).data('index',i);

  $('#picbtn'+i).click(
    function(event)
    {
      if(selectedItem.attr('src') == $('#picitem'+$(this).data('index')).attr('src'))
      {
        return;
      }
      setSelectedItem($(this).data('index'));
    }
  );

 

}

btns.append(' ');

//

setSelectedItem(0);

//��ʾָ����ͼƬindex

function setSelectedItem(index)
{
  selectedIndex = index;
  
  clearInterval(playID);

  //alert(index);

  if(selectedItem)selectedItem.fadeOut('fast');
  
  selectedItem = $('#picitem'+index);

  selectedItem.fadeIn('slow');

  //

  if(selectedBtn)
  {
    selectedBtn.css('backgroundColor','#eee');

    selectedBtn.css('color','#000');

  }

  selectedBtn = $('#picbtn'+index);

  selectedBtn.css('backgroundColor','#000');

  selectedBtn.css('color','#fff');

 

//�Զ�����

 

  playID = setInterval(function()
  {
    var index = selectedIndex+1;
    if(index > pics.length-1)index=0;
    setSelectedItem(index);
  },pics[index].time);
}

}

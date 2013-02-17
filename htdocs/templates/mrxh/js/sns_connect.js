/* Connect to SNS server by Fan 2012-11-21 */
/* connect to weibo button by Fan 2012-11-1 */
     WB2.anyWhere(function(Weibo){
          Weibo.widget.connectButton({
              id: "mrxh_wb_connect_btn",	
              type:"3,2",
              callback : {
                  login:function(o){	//登录后的回调函数
                    //alert("login: "+o.screen_name);
                  },	
                  logout:function(){	//退出后的回调函数
                    //alert("logout");
                  }
              }
          });
      });
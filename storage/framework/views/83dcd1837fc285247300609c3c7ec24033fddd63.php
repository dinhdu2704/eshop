	<h3>Đăng xuất thành công</h3>
	<li style="list-style: none" class="lino">Bạn sẽ chuyển về <a href="home"/>trang chủ</a> sau <span id="time">10</span> giây<br/>
	Ấn vào <a href="/" onclick="reload();" id="reloadlink" title="Nhấn vào đây để tải lại trang">đây<a> để về ngay
	</li>
	<script type="text/javascript"> 
		var jgt = 10;
		function stime()
		{
			document.getElementById('time').innerHTML = jgt;    
			jgt = jgt - 1;
		    if(jgt == 0)
		    {
		    	clearInterval(timing); 
		    	location = 'home';
			}
		}
		var timing = setInterval("stime();",1000);
	</script>

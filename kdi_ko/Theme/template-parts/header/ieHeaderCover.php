<script>
  function forIE() {
    var t = $('header.pageHeader figure.post-thumbnail > img'), // 이미지 태그 
      s = 'url(' + t.attr('src') + ')', // 이미지 태그의 src를 가져옴.
      p = t.parent(), // 부모 컨테이너 '.img-container'
      d = $('<div class="backGround"></div>'); // div를 하나 만듦.

    t.hide(); //이미지는 숨기고.
    p.append(d); //부모div에 생성한 div를 붙임.

    d.css({
      'height': '100%',
      'background-size': 'cover',
      'background-repeat': 'no-repeat',
      'background-position': 'center',
      'background-image': s
    });
  }
  if (document.querySelector('body').classList.contains('ie')) {
    forIE();
  }
</script>
      <!-- braking news section -->
      <div class="breaking-news">
        <div class="container">
            <div class="border-top border-bottom custom-border d-flex align-items-center">
                <span class="latest text-white text-uppercase text-center d-inline-block">ব্রেকিং নিউজ</span>
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="m-0 d-flex">
                        @foreach ($breskingdatas as $breskingdata)
                        <li class="mx-3"><a class="text-decoration-none" href="#">{{$breskingdata->name}}</a></li><br>
                        @endforeach
                    </ul>
                </marquee>
            </div>
        </div>
    </div> 

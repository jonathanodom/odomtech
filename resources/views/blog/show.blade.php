@extends('layouts.layout')

@section('content')
	<div class="container-fluid  headerimg">

        <!-- <img src="three-crosses1.jpg"> -->
         <div class="blog-header">
          
          <p class="lead blog-description">The one place that talks Tech, Music, Life and all things Christ.</p>
          <p></p>
        </div>

      </div>
    <div class="container">
      
     
      <div class="blogNav">
        
        <ul class="nav nav-tabs nav-justified">
          <li class="active">
            <a href="#">All</a>
          </li>
          <li>
              <a href="#">Devotions</a>
          </li>
          <li>
              <a href="#">Tech</a>
          </li>
          <li>
              <a href="#">Music</a>
          </li>
          <li>
              <a href="#">Bible</a>
          </li>
          <li>
              <a href="#">Life</a>
          </li>
        </ul>
      </div>
      <div class="row">

        <div class="col-sm-7 blog-main">
          
          <div class="blog-post">
            <h2 class="blog-post-title">First Things First</h2>
            <p class="blog-post-meta">March 5, 2017 by <a href="#">Jonathan</a></p>

            
            <h2>Who Am I!</h2>
            <h4>My Story</h4>
            <p>Hi, I'm Jonathan the creator and founder of "The DWD" blog and Discipleship Web Designs and Services. My story is a long one and I will share bits and peices of were I've been and how I got to where I am today through my posts. I have always been somewhat of a <em>"Techie"</em> and have had a passion for electronics and creating things that are awesome. Several years ago I got into web design when I attended Full Sail University's Online course working on a degree in Mobile Development. Which I didn't finish due to the high cost of tuition but continued self learning the ins and outs of web programming and electrical engineering. I owe a lot to my first client that became somewhat of a mentor to me after he asked me to attend a Bible study group he was putting together several years ago. When we met he shared three scriptures <a href="https://www.bible.com/bible/116/jer.29.11">Jer. 29:11</a> and <a href="https://www.bible.com/bible/116/pro.20.24">Prov. 20:24</a> and <a href="https://www.bible.com/bible/116/pro.21.1">Prov. 21:1</a> with me that has in turn led me here to this day. Now a bit about my life at this moment in time. My amazing wife and I have been married now for 4 years(<sub>Thursday</sub>). A father of 3; a 7<sup>yr</sup> old daughter and 7 <sup>Month</sup> old identical twin boys(<sub>not as hectic as most might think</sub>). God as shown me how he works in ways we do not expect with the birth of our twins. In the past two years my family has lost two loved ones, my Mom and Grandfather; but we gained two with our twins. On a side note a funny story about when we revealed that we were expecting is the first thing my grandfather told our daughter was "get ready your about to have 2 brothers". And this was before even my wife and I even knew about the twins. OK back on topic.<br> A few things I have created in the past include several web sites: 
              <ul>
                <li><a href="http://www.jlmsold.com">Martin Real Estate</a></li>
                <li><a href="http://www.jimcurryrealty.com">Jim Curry Realty</a></li>
                <li><a href="http://www.joepaulnichols.com">Joe Paul Nichols bus Tour & biography site</a></li>
                <li><a href="https://www.grahamcarsandstars.org">Graham Cars & Stars Car Show </a></li>
                <li><a href="http://www.discipleshipwebdesigns.com">DWD Services and this blog</a></li>
              </ul>
              A mobile phone app: <a href="https://play.google.com/store/apps/details?id=discipleshipwebdesigns.biblesearch">Bible Search</a>
              <br>My current projects are an update to the Bible Search app and a christmas light show made with a Raspberry Pi. 
            </p>
            <h4>My Goals</h4>
            <p>My main goal for this blog is to grow in my Faith and strengthen my relationship with God by sharing and studying His Word with you(the reader) by posting a weekly reflection/devotion of my current study of God's Word. Expect the first devo be on Thursday March 9<sup>th</sup>. I'm going to talk about new Christian music releases and music that has meaning in my life, new electronics for DIY projects and my DIY projects I am working on, my journey of fatherhood with twins, and Computer games, and the best of all a Verse of the Day and a Song to get you through the working hours.  </p>
            <h3></h3>
            
          </div><!-- /.blog-post -->

          <hr>

          <!-- <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav> -->

        </div><!-- /.blog-main -->

        <div class="col-sm-4 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset ">
            <h3>Verse of the Day</h3>
            <a href="https://www.bible.com/bible/116/psa.37.4">Psalms 37:4 </a>
            <p><a href="images/verseofday/3-8-17.jpg"><img src="/images/verseofday/3-8-17.jpg" class="vod"></a></p>
          </div>
          <div class="sidebar-module sidebar-module-inset">
            <h3>Song of the Day</h3>
            <p>On This I Stand - Jason Bare</p>
            <p><iframe width="100%" height="275" src="https://www.youtube.com/embed/pUEipnGvS7A" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>My name is Jonathan Odom. I'm a web developer/programmer devoted to sharing the Love and Salvation of Jesus Christ through my passion of Technology, Music, Gaming, and Fatherhood. </p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">Verse of the Day </a></li>
              <li><a href="#">Song of the Day </a></li>
              <li><a href="#">March 2017</a></li>
              
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              
              <li><a href="https://twitter.com/dwdservices">Twitter</a></li>
              <li><a href="https://www.facebook.com/discipleshipwebdesigns">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
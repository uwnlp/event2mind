<!DOCTYPE html>
<head>
  <title>Event2Mind: Commonsense Inference on Events, Intents and Reactions</title>
  <link rel="stylesheet" href="css/style.css">
  <!--script src="https://d3js.org/d3.v4.min.js" charset="utf-8"></script>
  <script src="https://d3js.org/queue.v1.min.js"></script-->
  <!--script src="http://spin.js.org/spin.min.js"></script-->

  <script type="text/javascript" src="js/clientside.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
  
  <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container content-left">
    <div class="row" style="margin-top: 50px;">
      <div class="col-sm-10">
        <h1 class="display-3">Event2Mind<small class="text-muted"><br>Commonsense Inference on Events, Intents and Reactions</small></h1>
        <p><em>Quick links:</em>&nbsp;
          <a href="../pdfs/rashkin2018event2mind.pdf">[paper]</a>
          &nbsp;
          <a href="data/event2mind.zip">[download dataset]</a>
          &nbsp;
          <a href="" data-target="#contactUs" data-toggle="collapse" onclick="return false;">[contact us]</a>
        </p>
        <div id="contactUs" class="collapse">
          <p>
            For research or press inquiries, contact <a href="hrashkin@cs.washington.edu">Hannah</a> and/or <a href="mailto:msap@cs.washington.edu">Maarten</a>.
          </p>
          <hr>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-9 col-md-7">
        <div class="row">
          <div class="col-sm-12">
            <div class="alert alert-secondary" role="alert">This website is still under construction, check back soon...</div>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-md-3" style="margin-top: 20px;">
        <figure>
          <div class="img-div">
            <img class="figure-img img-fluid rounded" src="graphics/m2vFigure1_v2.png" alt="see caption" style="width: 100%;max-width:none;">
            <img class="hoverlarge" src="graphics/m2vFigure1_v2.png" alt="see caption" style="left:-120px;top:-75px; border-radius: 0%;">
            <figcaption class="figure-caption">
              Examples of commonsense inference on mental states of event participants. In the third example event, common sense tells
              us that Y is likely to feel betrayed as a result of X reading their diary.
            </figcaption>
          </div>
        </figure>
        <hr>
        <figure>
          <div class="img-div">
            <img class="figure-img img-fluid rounded" src="graphics/mind2vecMovies_v3 (birnn-seq).png" alt="see caption" style="width: 100%;max-width:none;">
            <img class="hoverlarge" src="graphics/mind2vecMovies_v3 (birnn-seq).png" alt="see caption" style="left: -120px; top: 85px; border-radius: 0%;">
            <figcaption class="figure-caption">
              Two scene description snippets from <em>Juno</em> (2007, top) and <em>Pretty Woman</em> (1990, bottom).
            </figcaption>
          </div>
        </figure>
      </div>
    </div>
    <hr>
    <div class="row" style="margin-bottom: 100px;">
      <div class="col-sm-12">
        <em>Read our paper for more:</em>
          <br>
          Hannah Rashkin, Maarten Sap, Emily Allaway, Noah A. Smith, &amp; Yejin Choi (2018).<br>
          <strong>Event2Mind: Commonsense Inference on Events, Intents and Reactions</strong>. <em>ACL</em>
          <a href="../pdfs/rashkin2018event2mind.pdf">[view pdf]</a>
      </div>
    </div>
  </div>  
</body>

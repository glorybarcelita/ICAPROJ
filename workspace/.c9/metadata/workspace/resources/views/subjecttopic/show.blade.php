{"filter":false,"title":"show.blade.php","tooltip":"/resources/views/subjecttopic/show.blade.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":0,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["@extends('layouts.app')","@section('content')","<a href=\"{{ route('subjecttopic.index') }}\" class=\"btn btn-md btn-outline-secondary\">Go Back</a>",""],"id":1}],[{"start":{"row":3,"column":0},"end":{"row":36,"column":6},"action":"insert","lines":["<div class=\"container mt-4\">","     <h3 class=\"text-info\">{{ $subjects->name }}</h3>","     ","     <muted class=\"text-secondary\">Is a subject that has a collection of topics with learning Resources</muted>","    <br>","    ","    ","    <a href=\"{{ route('subjecttopic.create',['id' => $subject->id]) }}\" class=\"btn btn-md btn-info mt-3\">Add Topic</a>","    <div class=\"card card-info  mt-3\">","    ","         <div class=\"row\">","               ","                <div class=\"col-sm-3\">","                    <div class=\"card border-info my-3 mx-3\" style=\"max-width: 20rem;\">","                      <div class=\"card-header\">","                        <h5><a href=\"\" class=\"label text-info\">aaaa</a></h5>","                      </div>","                      ","                      <div class=\"card-body\">","                          ","                          <h6 class=\"text-info\">Description</h6>","                          <p class=\"card-text\">sampleee</p>","                          <h6 class=\"text-info\">Lecturer</h6>","                          <p class=\"card-text\">ediaww</p>","                      </div>","                      <div class=\"card-footer\">","                          <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#updateIcaSubject\">Update</button>","                      </div>","                    </div>","                </div>","        </div>","        ","    </div>","</div>"],"id":2}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":70},"action":"remove","lines":["',['id' => $subject->id]) }}"],"id":3}],[{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"remove","lines":["e"],"id":4}],[{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"remove","lines":["t"],"id":5}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"remove","lines":["a"],"id":6}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"remove","lines":["e"],"id":7}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"remove","lines":["r"],"id":8}],[{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"remove","lines":["c"],"id":9}],[{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["s"],"id":10}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":38},"action":"insert","lines":["h"],"id":11}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"insert","lines":["o"],"id":12}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["w"],"id":13}],[{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"insert","lines":[")"],"id":14}],[{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"insert","lines":[" "],"id":15}],[{"start":{"row":10,"column":42},"end":{"row":10,"column":43},"action":"insert","lines":["}"],"id":16}],[{"start":{"row":10,"column":43},"end":{"row":10,"column":44},"action":"insert","lines":["}"],"id":17}],[{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"insert","lines":["'"],"id":18}]]},"ace":{"folds":[],"scrolltop":75,"scrollleft":0,"selection":{"start":{"row":2,"column":37},"end":{"row":2,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1513353367723,"hash":"a3c530873694db89a1ede9327b0a93f03a52ff96"}
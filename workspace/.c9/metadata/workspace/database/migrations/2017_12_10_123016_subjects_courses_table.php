{"filter":false,"title":"2017_12_10_123016_subjects_courses_table.php","tooltip":"/database/migrations/2017_12_10_123016_subjects_courses_table.php","undoManager":{"mark":81,"position":81,"stack":[[{"start":{"row":15,"column":7},"end":{"row":15,"column":10},"action":"remove","lines":[" //"],"id":2},{"start":{"row":15,"column":7},"end":{"row":21,"column":11},"action":"insert","lines":[" Schema::create('courses', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('is_active');","            $table->string('course_name');","            $table->string('description');","            $table->timestamps();","        });"]}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":["s"],"id":3}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"remove","lines":["e"],"id":4}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":["s"],"id":5}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["r"],"id":6}],[{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["u"],"id":7}],[{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["o"],"id":8}],[{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["c"],"id":9}],[{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"insert","lines":["s"],"id":10}],[{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"insert","lines":["u"],"id":11}],[{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"insert","lines":["b"],"id":12}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["e"],"id":13}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["e"],"id":14}],[{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"insert","lines":["j"],"id":15}],[{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"insert","lines":["e"],"id":16}],[{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"insert","lines":["c"],"id":17}],[{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"insert","lines":["t"],"id":18}],[{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"insert","lines":["s"],"id":19}],[{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"insert","lines":["_"],"id":20}],[{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"insert","lines":["c"],"id":21}],[{"start":{"row":15,"column":34},"end":{"row":15,"column":35},"action":"insert","lines":["o"],"id":22}],[{"start":{"row":15,"column":35},"end":{"row":15,"column":36},"action":"insert","lines":["u"],"id":23}],[{"start":{"row":15,"column":36},"end":{"row":15,"column":37},"action":"insert","lines":["r"],"id":24}],[{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"insert","lines":["s"],"id":25}],[{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"insert","lines":["e"],"id":26}],[{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"insert","lines":["s"],"id":27}],[{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"insert","lines":["_"],"id":28}],[{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"insert","lines":["t"],"id":29}],[{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"insert","lines":["a"],"id":30}],[{"start":{"row":15,"column":43},"end":{"row":15,"column":44},"action":"insert","lines":["b"],"id":31}],[{"start":{"row":15,"column":44},"end":{"row":15,"column":45},"action":"insert","lines":["l"],"id":32}],[{"start":{"row":15,"column":45},"end":{"row":15,"column":46},"action":"insert","lines":["e"],"id":33}],[{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"remove","lines":["s"],"id":34}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"remove","lines":["i"],"id":35}],[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"remove","lines":["e"],"id":36}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"remove","lines":["v"],"id":37}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"remove","lines":["i"],"id":38}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"remove","lines":["t"],"id":39}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"remove","lines":["c"],"id":40}],[{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"remove","lines":["a"],"id":41}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"remove","lines":["_"],"id":42}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["s"],"id":43}],[{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["u"],"id":44}],[{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["b"],"id":45}],[{"start":{"row":17,"column":32},"end":{"row":17,"column":33},"action":"insert","lines":["j"],"id":46}],[{"start":{"row":17,"column":33},"end":{"row":17,"column":34},"action":"insert","lines":["e"],"id":47}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["c"],"id":48}],[{"start":{"row":17,"column":35},"end":{"row":17,"column":36},"action":"insert","lines":["t"],"id":49}],[{"start":{"row":17,"column":36},"end":{"row":17,"column":37},"action":"insert","lines":["_"],"id":50}],[{"start":{"row":17,"column":37},"end":{"row":17,"column":38},"action":"insert","lines":["i"],"id":51}],[{"start":{"row":17,"column":38},"end":{"row":17,"column":39},"action":"insert","lines":["d"],"id":52}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":26},"action":"remove","lines":["string"],"id":53},{"start":{"row":18,"column":20},"end":{"row":18,"column":27},"action":"insert","lines":["integer"]}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":40},"action":"remove","lines":["course_name"],"id":54},{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["b"],"id":55}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["j"],"id":56}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["e"],"id":57}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":["e"],"id":58}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["j"],"id":59}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"remove","lines":["b"],"id":60}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["u"],"id":61}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["b"],"id":62}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["j"],"id":63}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["e"],"id":64}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["c"],"id":65}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"remove","lines":["c"],"id":66}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["e"],"id":67}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"remove","lines":["j"],"id":68}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"remove","lines":["b"],"id":69}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"remove","lines":["u"],"id":70}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"remove","lines":["s"],"id":71}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["c"],"id":72}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["o"],"id":73}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["u"],"id":74}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["r"],"id":75}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["s"],"id":76}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["e"],"id":77}],[{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["s"],"id":78}],[{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["_"],"id":79}],[{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"remove","lines":["s"],"id":80}],[{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["i"],"id":81}],[{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"insert","lines":["d"],"id":82}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["            $table->string('description');",""],"id":83}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":8},"end":{"row":20,"column":11},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1512909144485,"hash":"b616cae6c9d7791821f7ac40442e7618ae897766"}
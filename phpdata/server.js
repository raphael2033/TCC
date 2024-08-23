Var http = require ('http');
Var Fs = require ('Fs');
Var content = Fs. ReadFilesSync ('conteudo.html');
http.createServer(function(Req,Res){ Rs.End (contents);
}).Listen(3000);
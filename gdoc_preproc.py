import re

with open("ruledoc.html","r",encoding="utf-8") as f:
	s=f.read()

def repl(s,pattern,replacement):
	res,n = re.subn(pattern,replacement,s)
	print("Replacing",pattern)
	print("  with",replacement)
	print("  total",n,"times.")
	if n<1:
		0/0
	return res
	
s=repl(s,
	"max-width:468pt;padding:72pt 72pt 72pt 72pt",
	"padding:12pt")
s=repl(s,
	'font-family:"Arial"',
	'font-family:"Noto Sans KR", "Arial", sans-serif')
s=repl(s,
	'<span class="c11"><a class="c22" href="mailto:.*">.*</a></span>',
	'<img src="mlpn_email.png" style="max-height:1.2em;vertical-align:middle;"/>')
s=repl(s,
	'</head>',
	'<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">')

with open("ruledoc_edit.html","w",encoding="utf-8") as f:
	f.write(s)

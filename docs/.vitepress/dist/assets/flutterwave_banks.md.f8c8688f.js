import{_ as s,c as a,o as n,N as e}from"./chunks/framework.a618ffea.js";const h=JSON.parse('{"title":"Bank API","description":"","frontmatter":{},"headers":[],"relativePath":"flutterwave/banks.md"}'),o={name:"flutterwave/banks.md"},l=e(`<h1 id="bank-api" tabindex="-1">Bank API <a class="header-anchor" href="#bank-api" aria-label="Permalink to &quot;Bank API&quot;">​</a></h1><h2 id="get-banks" tabindex="-1">Get Banks <a class="header-anchor" href="#get-banks" aria-label="Permalink to &quot;Get Banks&quot;">​</a></h2><p>Get list of banks for a given country by shortcode.</p><div class="language-php"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki material-theme-palenight"><code><span class="line"><span style="color:#89DDFF;">$</span><span style="color:#A6ACCD;">shortCode </span><span style="color:#89DDFF;">=</span><span style="color:#A6ACCD;"> </span><span style="color:#89DDFF;">&#39;</span><span style="color:#C3E88D;">NG</span><span style="color:#89DDFF;">&#39;</span><span style="color:#89DDFF;">;</span></span>
<span class="line"><span style="color:#89DDFF;">$</span><span style="color:#A6ACCD;">banks </span><span style="color:#89DDFF;">=</span><span style="color:#A6ACCD;"> </span><span style="color:#FFCB6B;">Flutterwave</span><span style="color:#89DDFF;">::</span><span style="color:#82AAFF;">getBanks</span><span style="color:#89DDFF;">($</span><span style="color:#A6ACCD;">shortCode</span><span style="color:#89DDFF;">);</span></span>
<span class="line"></span></code></pre></div><h3 id="get-banks-1" tabindex="-1">Get Banks <a class="header-anchor" href="#get-banks-1" aria-label="Permalink to &quot;Get Banks&quot;">​</a></h3><p>Get list of banks for a given country by shortcode.</p><div class="language-php"><button title="Copy Code" class="copy"></button><span class="lang">php</span><pre class="shiki material-theme-palenight"><code><span class="line"><span style="color:#89DDFF;">$</span><span style="color:#A6ACCD;">shortCode </span><span style="color:#89DDFF;">=</span><span style="color:#A6ACCD;"> </span><span style="color:#89DDFF;">&#39;</span><span style="color:#C3E88D;">NG</span><span style="color:#89DDFF;">&#39;</span><span style="color:#89DDFF;">;</span></span>
<span class="line"><span style="color:#89DDFF;">$</span><span style="color:#A6ACCD;">banks </span><span style="color:#89DDFF;">=</span><span style="color:#A6ACCD;"> </span><span style="color:#FFCB6B;">Flutterwave</span><span style="color:#89DDFF;">::</span><span style="color:#82AAFF;">getBanks</span><span style="color:#89DDFF;">($</span><span style="color:#A6ACCD;">shortCode</span><span style="color:#89DDFF;">);</span></span>
<span class="line"></span></code></pre></div>`,7),t=[l];function p(r,c,D,i,F,y){return n(),a("div",null,t)}const C=s(o,[["render",p]]);export{h as __pageData,C as default};
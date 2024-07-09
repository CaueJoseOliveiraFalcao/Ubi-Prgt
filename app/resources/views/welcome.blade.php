<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/img/logo_branca.png" type="image/x-icon"/>

<title>Tucandeira Web</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
<x-header-welcome/>  
<style>

.bg-gradiente {
    background-image: linear-gradient(to bottom, black 0%, #280162 50%,#04000A 100%);}
    
      
body{
  color:white;
  background-image: linear-gradient(to bottom, black 0%, #280162 50%, #04000A 100%);}
    
    /* início Tooltip */
    .iconscontainer {
  position: relative;
  margin: 0 5em;
  display: flex;
  /* align-items: center; */
  height: 100%;

  .icon {
    /* position: relative; */
    display: flex;
    width: 150px;
    height: 150px;
    /* flex-direction: column; */
    justify-content: center;
    align-items: center; 
    cursor: pointer;
    border-radius: 50%;
    background-color: #fff;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1), 0 3px 10px rgba(0, 0, 0, 0.07);

    span {
      position: absolute;
      top: 60%;
      margin-top: 30px;
      padding: .55rem 1rem;
      font-size: 1rem;
      font-weight: 500;
      white-space: nowrap;
      color: #000;
      border-radius: 30px;
      background-color: #fff;
      box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1),
        0 5px 15px rgba(0, 0, 0, 0.07);

      pointer-events: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      opacity: 0;
      transition: all 0.2s ease-in-out;
    }
    &:hover {
      span {
        top: 100%;
        opacity: 0.9;
      }
    }
  }
}
/* Definições gerais */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-optical-sizing: auto;
  font-style: normal;
}

body {
  color: white;
}

a {
  color: white;
  text-decoration: none;
}

/* Header */
header {
  background-color: #000000;
  padding: 70px 120px;
  display: flex;
}

nav{
    display: flex;
}


header nav a:hover {
  text-transform: uppercase;
  color: #9b1f53;
}

/* Botão de login e botão WhatsApp */
.botaologin,
.botaowhatsapp {
  background-color: #9b1f53;
  border-color: #9b1f53;
  border-radius: 20px;
  padding: 10px 20px;
  font-size: 18px;
  cursor: pointer;
  color: white;
  transition: background-color 0.3s;
}

.botaologin:hover,
.botaowhatsapp:hover {
  background-color: #81039b;
}

/* Linhas rosa */
.linha-rosa,
.linha-rosa2 {
  background-color: #9b1f53;
  height: 2px;
  margin: 0;
}

.linha-rosa2 {
  margin-bottom: 20px;
}

/* Botão WhatsApp no índice */
.botao {
  display: inline-block;
  padding: 5px 10px;
  margin-top:50px;
  border: none;
  border-radius: 15px;
  font-size: 18px;
  text-align: left;
  cursor: pointer;
  color: white;
  background-color: #81039b;
}

.botao img {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  max-width: 100%;
  height: auto;
}

/* Tooltip */
.tooltip {
  position: relative;
  display: inline-block;
  cursor: pointer;
  margin: 0 10px;
}

.tooltip img {
  width: 90%;
  height: auto;
  display: block;
  margin: 0 auto;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: auto;
  background-color: #280162;
  color: white;
  text-align: center;
  border-radius: 6px;
  padding: 10px;
  position: absolute;
  z-index: 1;
  top: 80%;
  left: 50%;
  transform: translateX(-50%);
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

/* Seção "Dúvidas" */
#duvidas {
  display: flex;
  align-items: start;
  gap: 64px;
  padding: 64px 80px;
}

.duvida {
  position: relative;
  color: white;
}

.duvida h3 {
  border: 2px solid #81039B;
  border-radius: 8px;
  padding: 24px;
  cursor: pointer;
  color: white;
}

.duvida img {
  position: absolute;
  top: 32px;
  right: 24px;
}

.duvida p {
  border-left: 1px solid #81039b;
  border-right: 1px solid #81039b;
  border-bottom: 1px solid #81039b;
  border-radius: 0 0 8px 8px;
  margin-top: -8px;
  padding: 0 24px;
  height: 0;
  overflow: hidden;
  opacity: 0;
  color: white;
  font-size: 25px;
}

.duvida.ativa p {
  height: fit-content;
  opacity: 1;
  padding: 24px;
}

/* Seção "Início" */
.inicio {
  margin-top: 70px;
  margin-left: 150px;
}

.inicioh3 {
  margin-left: -130px;
  font-size: medium;
}

.orcamento {
  margin-left: 10px;
}

.botaozap1 {
  height: 60px;
  width: fit-content;
}

.pergunta {
  font-weight: 600;
  text-align: center;
}

h1{
    font-weight:600;
    font-size:50px
   
}

h3{
font-weight:600;
font-size:40px;
margin-left:130px;
margin-top:30px;
}

.linhaindex{
   margin-top:-25px;
}

.linha2{
    margin-top:100px;
}

.linha3{
    margin-top:30px;
}

.linha4{
    margin-top:10px;
}

/* popup */
.iconscontainer {
            background-color: #ffffff; /* Cor de fundo do contêiner do ícone */
            padding: 30px; /* Espaçamento interno do contêiner */
            border-radius: 10px; /* Borda arredondada */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .icon img {
            max-width: 100px; /* Largura máxima da imagem do ícone */
            margin-bottom: 15px; /* Margem abaixo da imagem do ícone */
        }

        .icon ul {
            list-style-type: none; /* Remove marcadores de lista */
            padding: 0; /* Padding zero */
            margin: 0; /* Margin zero */
        }

        .icon ul li {
            margin-bottom: 10px; /* Margem abaixo de cada item da lista */
        }

        h4{
            text-align:center;
            font-weight:600;
            font-size:large;
        }
        /* sobre css */
        
        .pservicos{
            text-align:center;
            font-weight:600;
            font-size:25px;
            margin-top:30px;
        }
        
        .psobre{
            font-weight:600;
            font-size:30px;
          
        }
        .psobre1{
            font-weight:600;
            font-size:30px;
    
      
        }

        .pgeralsobre{
            margin-top:50px; 
            margin-left:-900px;
        }
        .imgsobre{
            margin-left:1200px;
           width:600px;
           height:600px;
           margin-top:-600px;
        }
        /*...................... SEÇÂO 04 - Dúvidas...................... */
/*ID*/
#duvidas {
  display: flex; /* alinhamento*/
  align-items: start;
  gap: 64px;
  padding: 64px 80px;
}
/* Posição relativa é pré-requisito para add uma posição absoluta*/
/*Class*/
.duvida {
  position: relative;
  color: white;
}
.duvida h3 {
  border: 2px solid#81039B;
  border-radius: 08px;
  padding: 24px;
  cursor: pointer;
  color: white;
}
/* posicionamento das setas */
.duvida img {
  position: absolute;
  top: 32px;
  right: 24px;
}
.duvida p {
  border-left: 1px solid #81039b;
  border-right: 1px #81039b solid;
  border-bottom: 1px solid #81039b;
  border-radius: 0 0 8px 8px; /* canto sup esq. sup dir. inf dir. inf esq*/
  margin-top: -8px; /*margem negativa p/ aparentar infinita e ficar por baixo da outra margem*/
  padding: 0 24px;
  height: 0;
  overflow: hidden;
  opacity: 0;
  color: white;
  font-size: 25px;
}
/* Chamar no JS */
.duvida.ativa p {
  height: fit-content;
  opacity: 1;
  padding: 24px;
}

.sobrenos{
  font-weight:600;
  margin-top:120px;
  margin-left:-100px;
}

.h2contato{
  font-weight:600;
  text-align:center;
  font-size:50px;
}

/* contato */
.pcontato{
  font-weight:600;
  margin-left:140px;
  font-size:30px;
}

.pcontato1{
  font-weight:600;
  margin-left:140px;
  font-size:30px;
  margin-top:40px;
}


.carrolsel-width {
    font-family: Arial, sans-serif;
    min-width: 100vw;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
}

.carousel {
    position: relative;
    width: 70%;
    max-width: 1200px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-item {
    min-width: 100%;
    box-sizing: border-box;
}

.carousel-item img {
    width: 100%;
    display: block;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 5px;
    cursor: pointer;
    z-index: 1;
    border-radius: 50%;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

       


</style>
 <!-- Conteúdo -->
 <body>

 <main>
   
        
    <div class="linha-rosa linhaindex"></div>
      <section class="inicio">
        <div class="row">
          <div class="col-12"> 
            <!-- Titulo -->
            <h1>
              Transforme sua<br>
              visão em realidade<br>
              digital
            </h1>
          </div>
        </div>
        <div class="inicioh3">
          <h3>
            Criamos sites que não só<br> impressionam, mas também<br> geram resultados para o seu<br> negócio!
          </h3>
        </div>
        <div class="orcamento">
          <a target="_blank" href="https://wa.me/559298113525">
            <button class="botao">  
            <img src="/whatsapp-white-icon.svg" width="40px" height="40px" alt="Ícone do botão"/>FAZER ORÇAMENTO
            </button>
          </a>
        </div>
      </section>
    </section>
    <div class="linha-rosa linha2"></div>
<!-- seção carrossel -->
<section>
  <div class="carrolsel-width">
        

    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1img (1).png" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="1img (1).png" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="1img (1).png" alt="Imagem 3">
            </div>
        </div>
        <button class="prev" onclick="moveCarousel(-1)">&#10094;</button>
        <button class="next" onclick="moveCarousel(1)">&#10095;</button>
    </div>
</section>
<div class="linha-rosa linha3"></div>
<!-- seção popup -->
<section>
<h4><strong>Nossos Serviços</strong></h4>
<div class="linha-rosa linha4"></div>
<div class= "pservicos" >
<p>Potencialize sua presença online: reduza custos e economize tempo, deixe a gestão das suas redes <br> sociais nas mãos de quem entende do assunto e alcance o sucesso digital que sua marca merece!</p>
</div>
<a  href="/"><img src="/logo_branca.png" class=imgnav width="1000" height="1000" alt="Logo"/></a>
</section>
 
<!-- seção sobre -->
 <section class="">
 <section class="text-center">     
        <h2><strong>Sobre Nós</strong></h2> 
        <div class="linha-rosa2"></div>   
        <div class="psobre">
        <div class ="pgeralsobre">
      <p class="p2">
        Descubra a essência da Tucandeira Webtech,<br> onde a criatividade  se une
        à estratégia  para impulsionar o  sucesso  <br>   do   seu negócio  no mundo
        digital.
      </p>
    </div>
    <div class="psobre1">
    <div class ="pgeralsobre">  
      <p class="p3">
        Oferecemos serviços que vão desde a criação de sites<br>  intuitivos e
        impactantes até a gestão de mídias sociais <br>  e anúncios, visando
        converter visitantes em clientes. <br>  Transformamos desafios em
        oportunidades, tornando<br>  marcas protagonistas no cenário digital. Seja
        bem-vindo<br>  ao seu novo parceiro estratégico em marketing digital,<br>  onde
        a "Webtech" é a nossa base para oferecer<br>  soluções abrangentes em
        design, programação, <br> automação, gerenciamento de conteúdo e
        hospedagem.
      </p>
    
    </div>
      <div>
      <a  href="/"><img src="/logo_branca.png" class=imgsobre width="120" height="100" alt="Logo"/></a>
    </div>
    </section>
    <!-- Fim sobre -->
    <!-- seção Perguntas -->
    <div class="linhasobre"></div>   
  
    <section>
    <div id="duvidas">
<!-- Coluna 2, texto -->
<!-- Pergunta 01 -->
  <!-- Coluna 2, texto -->
        <!-- Pergunta 01 -->
         
       
        <div class="text-center sobrenos">
            <h2>Perguntas Frequentes</h2>
          <div class="duvida">
            <h3>
               Com o que vou gastar na criação e manutenção do meu site?
            </h3>
            <img  src="/seta.svg" />
            <p class="paragrafo">
                Desenvolvimento: Desde a criação inicial até a personalização, pode variar se você contratar um profissional ou usar ferramentas acessíveis. Hospedagem: Manter seu site online requer um serviço de hospedagem, com opções que variam de econômicas a premium, pagas mensal ou anualmente. Domínio: O endereço do seu site, pago anualmente, varia conforme a extensão (.com, .net, etc.). Planeje esses custos para garantir um site eficiente e bem-sucedido.
              </p>
            </div>
             <!-- Pergunta 02 -->
        <div class="duvida">
            <h3>
                Minha empresa não é de Manaus, isso representa algum inconveniente?</h3>
            <img  src="assets/img/seta.svg" />
            <p class="paragrafo">
                Não há problema algum! Atendemos clientes de todas as regiões, oferecendo nossos serviços de forma eficiente e adaptada às necessidades de cada empresa, independentemente da localização. Estamos aqui para ajudar você a alcançar seus objetivos, onde quer que sua empresa esteja sediada.
            </p>
          </div>
          <!--Pergunta 03 -->
        <div class="duvida">
            <h3>
                Vocês oferecem serviços de criação de conteúdo para blogs e mídias sociais?
            </h3>
            <img src="assets/img/seta.svg" />
            <p class="paragrafo">
                Sim, oferecemos serviços completos de criação de conteúdo para blogs e mídias sociais. Isso inclui criação de posts semanais personalizados para Instagram, auxílio na identidade visual para manter a consistência da marca e produção de vídeos semanais exclusivos para reels, garantindo uma presença dinâmica e envolvente nas redes sociais
            </p>
          </div>
           <!-- Pergunta 04 -->
        <div class="duvida">
            <h3>Vocês oferecem serviços de manutenção e atualização do site após o lançamento?</h3>
            <img  src="assets/img/seta.svg" />
            <p class="paragrafo">
                Sim, oferecemos suporte contínuo e consultoria após a conclusão do projeto de criação do seu site. Estamos comprometidos em ajudar sua empresa a crescer online, oferecendo assistência técnica, atualizações de conteúdo e orientação estratégica conforme suas necessidades evoluem
            </p>
          </div>
        </div>
        </section>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const elementoDuvida = document.querySelectorAll(".duvida");
        
                elementoDuvida.forEach(function(duvida) {
                    duvida.addEventListener("click", function() {
                        duvida.classList.toggle("ativa");
                    });
                });
            });
        </script>
           </section>
<!-- seção contato -->
<section>
  <div class="h2contato">
<h2> Somos um time pronto para atender a sua necessidade <h2>
          </div>
          <div class="linha-rosa2"></div>   
          <div class="pcontato">
            <p>Entre em contato!<p>
          </div>
          <div class="pcontato1">
            <p>Telefone<p>
          </div>




</section>


  </main>
  






</body>

</html>
<script>
          let currentIndex = 0;

function moveCarousel(direction) {
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    currentIndex += direction;
    if (currentIndex < 0) {
        currentIndex = totalItems - 1;
    } else if (currentIndex >= totalItems) {
        currentIndex = 0;
    }

    const offset = -currentIndex * 100;
    document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
}
</script>
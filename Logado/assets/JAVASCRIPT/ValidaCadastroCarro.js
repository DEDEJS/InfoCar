
function modelos(){
const AudiModelos = [  
"<option>Outro Modelo</option>",
"<option>A1</option>",
"<option>A3</option>",
"<option>A4</option>",
"<option>A5</option>",
"<option>A6</option>",
"<option>A7</option>",
"<option>A8</option>"
];
const BmwModelos = [
    "<option>Outro Modelo</option>",
    "<option>1M</option>",
    "<option>116I</option>",
    "<option>118I</option>",
    "<option>120I</option>",
    "<option>125I</option>",
    "<option>130I</option>",
    "<option>320</option>",
    "<option>320I</option>",
    "<option>330E</option>",
    "<option>420I</option>",
    "<option>428I</option>",
    "<option>M1</option>",
    "<option>M2</option>",
    "<option>M3</option>",
    "<option>M4</option>",
    "<option>M5</option>",
    "<option>M6</option>",
    "<option>M8</option>",
    "<option>X1</option>",
    "<option>X2</option>",
    "<option>X3</option>",
    "<option>X4</option>",
    "<option>X5</option>",
    "<option>X6</option>",
    "<option>X7</option>",
    "<option>Z3</option>",
    "<option>Z4</option>",
];
const ChevroletModelos = [
    "<option>Outro Modelo</option>",
    "<option>Agile</option>",
    "<option>Astra</option>",
    "<option>Blazer</option>",
    "<option>C10</option>",
    "<option>C14</option>",
    "<option>C15</option>",
    "<option>C20</option>",
    "<option>Calibra</option>",
    "<option>Camaro</option>",
    "<option>Captiva</option>",
    "<option>Caravan</option>",
    "<option>Celta</option>",
    "<option>Chevelle</option>",
    "<option>Chevette</option>",
    "<option>Chevy 500</option>",
    "<option>Classic</option>",
    "<option>Cobalt</option>",
    "<option>Corsa</option>",
    "<option>Corvette</option>",
    "<option>Cruze</option>",
    "<option>D10</option>",
    "<option>D20</option>",
    "<option>D40</option>",
    "<option>Impala</option>",
    "<option>Kadett</option>", 
    "<option>Omega</option>",
    "<option>Onix</option>",
    "<option>Opala</option>",
    "<option>Prisma</option>",
    "<option>S10</option>",
    "<option>Silverado</option>",
    "<option>Spin</option>",
    "<option>Tracker</option>",
    "<option>Vectra</option>",
    "<option>Zafira</option>"
];
const FiatModelos = [
    "<option>Outro Modelo</option>",
    "<option>147</option>",
    "<option>500e</option>",
    "<option>Argo</option>",
    "<option>Brava</option>",
    "<option>Bravo</option>",
    "<option>Cronos</option>",
    "<option>Dobló</option>",
    "<option>Elba</option>",
    "<option>Fastback</option>",
    "<option>Fiorino</option>",
    "<option>Grand Siena</option>",
    "<option>Idea</option>",
    "<option>Linea</option>",
    "<option>Marea</option>",
    "<option>Mobi</option>",
    "<option>Palio</option>",
    "<option>Premio</option>",
    "<option>Pulse</option>",
    "<option>Siena</option>",
    "<option>Stilo</option>",
    "<option>Strada</option>",
    "<option>Tempra</option>",
    "<option>Tipo</option>",
    "<option>Toro</option>",
    "<option>Uno</option>"
];
const FordModelos = [
    "<option>Outro Modelo</option>",
    "<option>Belina</option>",
    "<option>Bronco Sport</option>",
    "<option>Corcel</option>",
    "<option>Courier</option>",
    "<option>Del Rey</option>",
    "<option>Ecosport</option>",
    "<option>Edge</option>",
    "<option>Escort</option>",
    "<option>Expedition</option>",
    "<option>Explorer</option>",
    "<option>F-1</option>",
    "<option>F-100</option>",
    "<option>F-1000</option>",
    "<option>F-2000</option>",
    "<option>F-250</option>",
    "<option>F-350</option>",
    "<option>F-4000</option>",
    "<option>F-75</option>",
    "<option>Fiesta</option>",
    "<option>Focus</option>",
    "<option>Fusion</option>",
    "<option>Galaxie</option>",
    "<option>Jeep</option>",
    "<option>Ka</option>",
    "<option>Landau</option>",
    "<option>Maverick</option>",
    "<option>Mustang</option>",
    "<option>Pampa</option>",
    "<option>Ranger</option>",
    "<option>Royale</option>",
    "<option>Territory</option>",
    "<option>Transit</option>",
    "<option>Verona</option>",
    "<option>Versailles</option>"
];
const HondaModelos = [
    "<option>Outro Modelo</option>",
    "<option>Accord</option>",
    "<option>City</option>",
    "<option>Civic</option>",
    "<option>Crv</option>",
    "<option>Fit</option>",
    "<option>Hr-v</option>",
    "<option>Prelude</option>",
    "<option>Wr-v</option>",
    "<option>Zr-v</option>"
];
const HyundaiModelos = [
"<option>Outro Modelo</option>",
        "<option>Atos</option>",
        "<option>Azera</option>",
        "<option>Coupê</option>",
        "<option>Creta</option>",
        "<option>Elantra</option>",
        "<option>Grand Santa Fé</option>",
        "<option>Hb20</option>",
        "<option>Hr</option>",
        "<option>I30</option>",
        "<option>Ix35</option>",
        "<option>Santa Fé</option>",
        "<option>Sonata</option>",
        "<option>Tucson</option>",
        "<option>Veloster</option>",
        "<option>Veracruz</option>"
];
const JeepModelos = [
    "<option>Outro Modelo</option>",
    "<option>Cherokee</option>",
    "<option>Cj 5</option>",
    "<option>Cj 6</option>",
    "<option>Commander</option>",
    "<option>Compass</option>",
    "<option>Gladiator</option>",
    "<option>Grand Cherokee</option>",
    "<option>Renegade</option>",
    "<option>Wrangler</option>"
];
const KiaModelos = [
"<option>Outro Modelo</option>",
        "<option>Cadenza</option>",
        "<option>Carnival</option>",
        "<option>Cerato</option>",
        "<option>Picanto</option>",
        "<option>Sorento</option>",
        "<option>Sportage</option>"
];
const MercedesModelos = [
    "<option>Outro Modelo</option>",
    "<option>A 160</option>",
    "<option>A 190</option>",
    "<option>A 200</option>",
    "<option>A 250</option>",
    "<option>A 35 Amg</option>",
    "<option>A 45 Amg</option>",
    "<option>Amg Gt</option>",
    "<option>Amg Gt 43</option>",
    "<option>Amg Gt 63</option>",
    "<option>B 170</option>",
    "<option>B 180</option>",
    "<option>B 200</option>",
    "<option>C 180</option>",
    "<option>C 200</option>",
    "<option>C 220</option>",
    "<option>C 230</option>",
    "<option>C 240</option>",
    "<option>C 250</option>",
    "<option>C 280</option>",
    "<option>C 300</option>",
    "<option>C 320</option>",
    "<option>C 32 Amg</option>",
    "<option>C 350</option>",
    "<option>C 43 Amg</option>",
    "<option>C 450 Amg</option>",
    "<option>C 450</option>",
    "<option>C 55 Amg</option>",
    "<option>C 63 Amg</option>",
    "<option>Cl 500</option>",
    "<option>Cl 63 Amg</option>",
    "<option>Cla 180</option>",
    "<option>Cla 200</option>",
    "<option>Cla 250</option>",
    "<option>Cla 35 Amg</option>",
    "<option>Cla 45 Amg</option>",
    "<option>Classe A</option>",
    "<option>Cla 180</option>",
    "<option>Cla 180</option>",
    "<option>Cla 180</option>"
];
const RenaultModelos = [
    "<option>Outro Modelo</option>",
    "<option>Captur</option>",
    "<option>Clio</option>",
    "<option>Duster</option>",
    "<option>Duster Oroch</option>",
    "<option>Fluence</option>",
    "<option>Grand Scénic</option>",
    "<option>Kangoo</option>",
    "<option>Kardian</option>",
    "<option>Kwid</option>",
    "<option>Logan</option>",
    "<option>Master</option>",
    "<option>Megane</option>",
    "<option>Oroch</option>",
    "<option>Sandero</option>"
];
const VolkswagenModelos = [
    "<option>Outro Modelo</option>",
    "<option>Amarok</option>",
    "<option>Apollo</option>",
    "<option>Bora</option>",
    "<option>Brasilia</option>",
    "<option>Buggy</option>",
    "<option>Cross Up</option>",
    "<option>Cross Fox</option>",
    "<option>Eos</option>",
    "<option>Gol</option>",
    "<option>Golf</option>",
    "<option>Jetta</option>",
    "<option>Kombi</option>",
    "<option>Logus</option>",
    "<option>New Beetle</option>",
    "<option>Nivus</option>",
    "<option>Parati</option>",
    "<option>Passat</option>",
    "<option>Pointer</option>",
    "<option>Polo</option>",
    "<option>Quantum</option>",
    "<option>Santana</option>",
    "<option>Saveiro</option>",
    "<option>Space Cross</option>",
    "<option>T-Cross</option>",
    "<option>Taos</option>",
    "<option>Tiguan</option>",
    "<option>Touareg</option>",
    "<option>Up</option>",
    "<option>Van</option>",
    "<option>Variant</option>",
    "<option>Virtus</option>",
    "<option>Voyage</option>"
];
Marca = document.getElementById('Marca');
ModeloSelect = document.getElementById('ModeloSelect'); 
MeuCarroDiv = document.getElementById('MeuCarroDiv');

if(Marca.value == "---"){
    ModeloSelect.style.display = "none";
    MeuCarroDiv.style.display = "none";
}else if(Marca.value == "Audi"){
  ModeloSelect.style.display = "block";
  return AudiModelos
}else if(Marca.value == "Bmw"){
    ModeloSelect.style.display = "block";
    return BmwModelos;
}else if(Marca.value == "Chevrolet"){
    ModeloSelect.style.display = "block";
    return ChevroletModelos;
}else if(Marca.value == "Fiat"){
    ModeloSelect.style.display = "block";
    return FiatModelos;
}else if(Marca.value == "Ford"){
    ModeloSelect.style.display = "block";
    return FordModelos;
}else if(Marca.value == "Honda"){
    ModeloSelect.style.display = "block";
    return HondaModelos;
}else if(Marca.value == "Hyundai"){
    ModeloSelect.style.display = "block";
    return HyundaiModelos;
}else if(Marca.value == "Jeep"){
    ModeloSelect.style.display = "block";
    return JeepModelos;
}else if(Marca.value == "Kia"){
    ModeloSelect.style.display = "block";
    return KiaModelos;
}else if(Marca.value == "Mercedes-Bens"){
    ModeloSelect.style.display = "block";
    return MercedesModelos;
}else if(Marca.value == "Renault"){
    ModeloSelect.style.display = "block";
    return RenaultModelos;
}else if(Marca.value == "Volkswagen"){
    ModeloSelect.style.display = "block";
    return VolkswagenModelos;
}
}
function ImprimeModelos(){
    Modelo = document.getElementById('Modelo');
     var ModelosArray = modelos();
    Modelo.innerHTML = ModelosArray;

    }
function ValidaformCadastro(){
    
     return modelos(), ImprimeModelos();
}
setInterval(ValidaformCadastro(), 1000)
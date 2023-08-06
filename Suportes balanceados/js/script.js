const btn = document.querySelector("#send");

btn.addEventListener("click", function (e) {
  e.preventDefault();

  const caracter = document.querySelector("#caracter");
  const value = caracter.value;
  caracter.value = '';

  var letra = value.split("");

  console.log(letra);

  var contagemDeParantes = 0;
  var contagemDeChaves = 0;
  var contagemDeCochetes = 0;

  letra.forEach((element) => {
    let valor = element;

    if (valor === "(" || valor === ")") {
      contagemDeParantes++;
    }

    if (valor === "{" || valor === "}") {
      contagemDeChaves++;
    }

    if (valor === "[" || valor === "]") {
      contagemDeCochetes++;
    }
  });

  console.log(`Numero de parenteses ${contagemDeParantes}`);

  console.log(`Numero de chaves ${contagemDeChaves}`);

  console.log(`Numero de chaves ${contagemDeCochetes}`);


  if (contagemDeParantes === 1 || contagemDeChaves === 1 || contagemDeCochetes === 1 || value === "" || value.Number) {
    alert(value + " Não é válido")
  } else {
    alert(value + " É válido")
  }
});

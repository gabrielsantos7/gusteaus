const menuItems = document.querySelectorAll("#menu-itens>li");

const inputName = document.querySelector("#nome");
const inputDate = document.querySelector("#data");
const inputPhone = document.querySelector("#telefone");

const cards = document.querySelectorAll(".card");
const cardapio = document.querySelector("#cardapio");

const finalizeButton = document.getElementById("btn-finalizar");
const modalTitle = document.querySelector("#staticBackdropLabel");
const modalBody = document.querySelector(".modal-body");
const modalContinueBtn = document.querySelector(".modal-footer .btn-success");

const currentDate = new Date();
const oneYearLater = new Date(currentDate);
oneYearLater.setFullYear(currentDate.getFullYear() + 1);

const maxDate = oneYearLater.toISOString().split("T")[0];

inputDate.setAttribute("min", currentDate.toISOString().split("T")[0]);
inputDate.setAttribute("max", maxDate);
inputName.addEventListener("keyup", capitalizeFirstLetter);

inputName.addEventListener("input", function (event) {
  let input = event.target;
  let value = input.value;

  // Remove caracteres especiais usando uma expressão regular
  value = value.replace(/[^a-zA-Z\s]/gi, '');

  input.value = value;
});


function capitalizeFirstLetter() {
  let inputNameValue = inputName.value;

  let words = inputNameValue.split(" ");

  for (let i = 0; i < words.length; i++) {
    if (words[i].length > 0) {
      words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
    }
  }

  let capitalizedText = words.join(" ");

  inputName.value = capitalizedText;
}

inputPhone.addEventListener("input", function (event) {
  let input = event.target;
  let value = input.value.replace(/\D/g, ""); // Remove caracteres não numéricos

  if (value.length > 11) {
    value = value.slice(0, 11); // Trunca o valor se exceder o limite
  }

  if (value.length > 2) {
    value = `(${value.substring(0, 2)}) ${value.substring(2)}`;
  }

  if (value.length > 10) {
    value = `${value.substring(0, 10)}-${value.substring(10)}`;
  }

  input.value = value;
});

menuItems.forEach((item) => {
  item.addEventListener("click", () => {
    const clickedCategory = item.textContent.trim().toLowerCase().replace(/\s+/g, '');
    
    // Adiciona a classe active no li clicado
    item.classList.add("item-active");
    
    // Remove a classe active dos demais elementos
    menuItems.forEach((otherItem) => {
      if (otherItem !== item) {
        otherItem.classList.remove("item-active");
      }
    });

    // Exibe a categoria clicada e oculta as outras
    cardapio.querySelectorAll('.row-items').forEach((category) => {
      const categoryId = category.id.toLowerCase();
      category.classList.toggle('d-none', categoryId !== clickedCategory);
    });
  });
});

cards.forEach((card) => {
  const quantityButton = card.querySelector(".btn-middle");
  const selectedQuantityParagraph = card.querySelector(".selected-quantity");
  const priceParagraph = card.querySelector(".price");

  // Inicializa a quantidade de itens como 0
  quantityButton.textContent = 0;

  // Adiciona um evento de clique ao botão de adicionar
  card.querySelector(".bi-plus").addEventListener("click", () => {
    // Incrementa a quantidade de itens
    if (quantityButton.textContent < 25) {
      quantityButton.textContent++;

      updateSelectedQuantity();
      updatePriceVisibility();
    }
  });

  // Adiciona um evento de clique ao botão de remover
  card.querySelector(".bi-dash").addEventListener("click", () => {
    // Se a quantidade de itens for maior que 0, decrementa a quantidade de itens
    if (quantityButton.textContent > 0) {
      quantityButton.textContent--;

      updateSelectedQuantity();
      updatePriceVisibility();
    }
  });

  // Adiciona um evento para remover a classe 'invisible' ao passar o mouse sobre o card
  card.addEventListener("mouseenter", () => {
    priceParagraph.classList.remove("invisible");
  });

  // Adiciona um evento para adicionar a classe 'invisible' ao retirar o mouse do card
  card.addEventListener("mouseleave", () => {
    const selectedQuantity = parseInt(quantityButton.textContent);
    if (selectedQuantity !== 0) {
      priceParagraph.classList.add("invisible");
    } else {
      priceParagraph.classList.remove("invisible");
    }
  });

  // Função para atualizar o parágrafo com a quantidade de itens selecionados
  function updateSelectedQuantity() {
    const selectedQuantity = parseInt(quantityButton.textContent);
    const itemText = selectedQuantity === 1 ? "item" : "itens";
    const selectionText =
      selectedQuantity === 1 ? "selecionado" : "selecionados";

    selectedQuantityParagraph.textContent =
      selectedQuantity > 0
        ? `${selectedQuantity} ${itemText} ${selectionText}`
        : "";
  }

  // Função para atualizar a visibilidade do preço
  function updatePriceVisibility() {
    priceParagraph.classList.remove("invisible");
  }
});

finalizeButton.addEventListener("click", function () {
  // Recupera os itens do pedido
  const orderItems = getOrderItems();

  if (orderItems.length === 0) {
    // Se nenhum item foi selecionado, atualize o título e corpo do modal
    modalTitle.textContent = "Pedido vazio";
    modalBody.innerHTML =
      "<p>Adicione pelo menos um item ao seu pedido antes de prosseguir.</p>";
    modalContinueBtn.classList.add("invisible");
  } else {
    // Se há itens selecionados, atualize o título e corpo do modal com base nos itens do pedido
    modalTitle.textContent = "Itens do Pedido";
    modalBody.innerHTML = buildModalContent(orderItems);
    modalContinueBtn.classList.remove("invisible");

    // Limpe qualquer classe 'invisible' do parágrafo de preço no modal
    const pricesInModal = modalBody.querySelectorAll(".price");
    pricesInModal.forEach((price) => price.classList.remove("invisible"));

    // Calcula e exibe o valor total do pedido
    const totalValue = calculateTotalValue(orderItems);
    const totalElement = document.createElement("p");
    totalElement.classList.add("font-weight-bold");
    totalElement.textContent = `Total: R$ ${totalValue.toFixed(2)}`;
    modalBody.appendChild(totalElement);

    // Adicione um evento ao botão "Prosseguir" para realizar a ação desejada
    modalContinueBtn.addEventListener("click", function () {
      // Adicione aqui a lógica para prosseguir com o pedido
      alert("Pedido finalizado com sucesso!");
    });
  }
});

// Função para obter os itens do pedido e retornar em um array de objetos
function getOrderItems() {
  const itens = [];
  cards.forEach((card) => {
    const itemQuantity = parseInt(
      card.querySelector(".btn-middle").textContent
    );
    if (itemQuantity > 0) {
      const itemName = card.querySelector(".font-satisfy").textContent;
      const itemPrice = parseFloat(
        card.querySelector(".price").textContent.replace("R$ ", "")
      );
      itens.push({
        name: itemName,
        quantity: itemQuantity,
        price: itemPrice,
      });
    }
  });
  return itens;
}

// Função de exemplo para construir o conteúdo do modal
function buildModalContent(orderItems) {
  let content = "<ul>";
  orderItems.forEach((item) => {
    const totalPrice = item.quantity * item.price;
    content += `<li>${item.quantity}x ${item.name} - R$ ${totalPrice.toFixed(
      2
    )} (R$ ${item.price.toFixed(2)} cada)</li>`;
  });
  content += "</ul>";
  return content;
}

// Função para calcular o valor total do pedido
function calculateTotalValue(orderItems) {
  return orderItems.reduce(
    (total, item) => total + item.quantity * item.price,
    0
  );
}
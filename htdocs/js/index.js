$(document).ready(function () {
    $(".center").slick({
      centerMode: true,
      centerPadding: "0px",
      dots: true,
      slidesToScroll: 1,
      slidesToShow: 5,
      prevArrow:
        '<span class="priv_arrow"> <i class="fa fa-chevron-left" aria-hidden="true"></i></span>',
      nextArrow:
        '<span class="next_arrow"> <i class="fa fa-chevron-right" aria-hidden="true"></i></span>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: "40px",
            slidesToShow: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: true,
            centerMode: true,
            centerPadding: "40px",
            slidesToShow: 1,
          },
        },
      ],
    });
  });


  const promos = [
    {
      text: "Profitez d'une semaine d'évasion et de bien-être dans la magnifique île de Chypre pour seulement 899 €",
      image: "../images/chypre.jpeg"
    },
    {
      text: "Découvrez et savourez les richesses touristiques et architecturales de Londres pour seulement 540 €",
      image: "../images/londres.jpeg"
    },
    {
      text: "Ne laissez pas passer cette offre exclusive, une semaine ensoleillée de rêve à Tunis pour seulement 670 €",
      image: "../images/tunis.jpeg"
    },
    {
      text: "Le luxe et l'élégance seront de mise durant cette semaine riche en émotions à Dubaï pour seulement 1230 €",
      image: "../images/dubai.jpeg"
    }
  ];
  
  let index = 0;
  
  const displayPromo = () => {
    const promo = promos[index];
    const textElement = document.getElementById("text");
  
    // alterner la classe
    if (textElement.classList.contains("white-text")) {
      textElement.classList.remove("white-text");
      textElement.classList.add("black-text");
    } else {
      textElement.classList.remove("black-text");
      textElement.classList.add("white-text");
    }
  
    // mettre à jour le texte de la promotion
    textElement.textContent = promo.text;
  
    document.getElementById("image").style.transition = "transform 0.5s linear";
    document.getElementById("image").src = promo.image;
    index++;
    if (index === promos.length) {
      index = 0;
    }
    setTimeout(() => {
      document.getElementById("image").style.transition = "transform 1s linear";
    }, 500);
  };
  
  displayPromo();
  setInterval(displayPromo, 8000);
  
  const imageContainer = document.getElementById("image-container");
  setInterval(() => {
    imageContainer.style.transform = "translateX(-50%)";
    setTimeout(() => {
      imageContainer.style.transform = "translateX(0)";
    }, 1000);
  }, 8000);
  


  
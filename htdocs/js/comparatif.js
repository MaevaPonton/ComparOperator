const stars = document.querySelectorAll('.star');
const ratingContainer = document.querySelector('.average-rating-stars');
const rating = document.querySelector('.stars-moyenne');
let index;

stars.forEach((star, i) => {
    star.addEventListener('click', () => {
        index = i;
        calculateAverage();
    });
});

function calculateAverage() {
    let sum = 0;
    stars.forEach((star, i) => {
        if (i <= index) {
            star.classList.remove('stargrey');
            star.classList.add('starfilled');
        } else {
            star.classList.remove('starfilled');
            star.classList.add('stargrey');
        }
    });

    stars.forEach((star, i) => {
        if (star.classList.contains('starfilled')) {
            sum += 1;
        }
    });

    const average = sum / stars.length;
    rating.innerHTML = average.toFixed(1);
    ratingContainer.style.setProperty('--rating', average);
}




/* Arrays for image links and captions */

const imageLinks = [
    "https://images.unsplash.com/photo-1657127291769-baf439d3003a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDE5fGlVSXNuVnRqQjBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=700&q=60",
    "https://images.unsplash.com/photo-1658784566751-95382f065d71?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDMzfGlVSXNuVnRqQjBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=700&q=60",
    "https://images.unsplash.com/photo-1658452243123-7f05f36de035?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDU1fGlVSXNuVnRqQjBZfHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=700&q=60"
  ];
  
 
  const timeCoverter = {
    toMS(originalDuration) {
      if (typeof originalDuration !== 'string') return 0
      const duration = originalDuration.replace(/[A-Za-z]/g, "")
      if(originalDuration.includes("ms")) return parseInt(duration)
      if(originalDuration.includes("s")) return parseInt(parseFloat(duration) * 1000)
      return 0
    }
  }
  
  const isDesktop = () => window.innerWidth > 992
  
  class Slider {
    constructor(element, config = {}) {
      if(element instanceof Element) this._element = element
      else if(typeof element === 'string') this._element = document.querySelector(element) 
      else throw new Error('Slider constructor requires an element or selector')
      
      this._config = typeof config === 'object' ? config : {}
      this._init()
    }
  
    _init() {
      this._getContainer()
      this._getListItem()
      if(this._totalItem === 0) return
      this._setupItem()
      this._getTransitionItem()
      if(this._config.autoplay) this._startAutoplay()
    }
  
    _getContainer() {
      this._container = this._element.querySelector(".slider-list")
      this._containerGap = getComputedStyle(this._container).gap
      if(this._config.reverse) this._container.style.justifyContent = "end"
    }
    
    _getListItem() {
      this._sliderItems = this._container.querySelectorAll('.slider-item')
      this._totalItem = this._sliderItems.length
    }
  
    _setupItem() {
      if(this._totalItem === 1) {
        this._container.style.gridAutoColumns = "100%"
        this._container.appendChild(this._sliderItems[0].cloneNode(true))
        this._sliderItems = this._element.querySelectorAll('.slider-item')
        this._totalItem = this._sliderItems.length
      }
      if(this._totalItem === 2) this._container.style.gridAutoColumns = "100%"
      if(!isDesktop()) return
      if(this._totalItem === 3) this._container.style.gridAutoColumns = "50%"
      if(this._totalItem === 4) this._container.style.gridAutoColumns = "33.33333333%"
      if(this._totalItem >= 5) this._container.style.gridAutoColumns = "25%"
    }
  
    _getTransitionItem() {
      this._originalTransitionDuration = getComputedStyle(this._container).transitionDuration
      this._transitionDuration = timeCoverter.toMS(this._originalTransitionDuration) ?? 0
    }
  
    update() {
      this._getListItem()
      this._setupItem()
    }
    
    _startAutoplay() {
      const repeat = (direction = null) => {
        this._move().then(() => {
          repeat()
        })
      }
      repeat()
    }
    
    _move(direction = null) {
      const resetTime = 20
      setTimeout(() => {
        this._container.style.transitionDuration = this._originalTransitionDuration
        if(this._config.reverse || direction === 'prev') {
          this._container.style.transform = `translateX(calc(${this._sliderItems[0]?.offsetWidth}px + ${this._containerGap}))`
        } else {
          this._container.style.transform = `translateX(calc(-${this._sliderItems[0]?.offsetWidth}px - ${this._containerGap}))`
        }
      }, resetTime)
      return new Promise(resolve => {
        this._swap(direction)
        setTimeout(() => {
          this._container.style.transitionDuration = "0s"
          this._container.style.transform = `translateX(0px)`
          this._pause = false
          resolve(true)
        }, this._transitionDuration)
      })
    }
    
    _swap(direction = null) {
      if(this._config.reverse || direction === 'prev') {
        const firstChild = this._sliderItems[0]
        const lastChild = this._sliderItems[this._totalItem - 1]
        this._container.insertBefore(lastChild, firstChild)
        this.update()
      } else {
        this.update()
        const firstChild = this._sliderItems[0]
        this._container.removeChild(firstChild)
        this._container.appendChild(firstChild)
      }
    }
  }
  
  const slider = new Slider('.slider', {
    autoplay: true,
    reverse: true
  })
  
  document.addEventListener("click", function(e) {
    if(!e.target.matches('[data-toggle="slider-action"]')) return
    if(!e.target.matches('[data-direction]')) return
    const direction = e.target.dataset.direction
    // if(direction === "next") slider.next()
    // if(direction === "prev") slider.prev()
  })
  
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { unset } = require('lodash');
const { default: Axios } = require('axios');
const { data } = require('jquery');

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });
const productPhotoInput= '<br><input type="file" name="photo[]"></input>';
const addPhotoButton = document.querySelector('#add-product-photo-button');
const deletePhotoButton = document.querySelector('#delete-product-photo-button');

const productPhotoInput2= '<button id="delete-product-photo-button" type="button" class="btn btn-outline-primary btn-sm">x</button>';
const productPhotoInputsArea = document.querySelector('#product-photo-inputs-area');
const productPhotoInputsArea2 = document.querySelector('#product-photo-inputs-area');

if(addPhotoButton){
    function addProduct() {
        const input=document.createElement('span');
        input.innerHTML=productPhotoInput;
        productPhotoInputsArea.appendChild(input);
        const input2=document.createElement('span');
        input2.innerHTML=productPhotoInput2;
        input2.onclick = removeHobby;
        productPhotoInputsArea2.appendChild(input2);
        count++;
    }
    function removeHobby() {
        productPhotoInputsArea2.removeChild(this.previousElementSibling);
        productPhotoInputsArea.removeChild(this);
    }
        document.getElementById('add-product-photo-button').addEventListener('click', addProduct);
        document.getElementById('delete-product-photo-button').addEventListener('click', removeHobby);
}

document.querySelectorAll('.add-button').forEach((button) => {
  button.addEventListener("click", () => {
      const form = button.closest(".form");
      const route = form.querySelector("[name=route]").value;
      const id = form.querySelector("[name=product_id]").value;
      const count = form.querySelector("[name=count]").value;
      form.querySelector("[name=count]").value = 0;
      axios.post('add-js', {
              product_id: id,
              count: count
      })
          .then(function(response) {
              const cart = document.querySelector('#cart-count');
              cart.innerHTML = response.data.html;
              console.log(response);
          })
          .catch(function(error) {
              console.log(error);
          });
  });
})

document.querySelectorAll('.minus-button').forEach((button)=>{
    button.addEventListener("click", ()=>{
        const form = button.closest(".form");

        const route = form.querySelector("[name=route]").value;
        const id = form.querySelector("[name=product_id]").value;
        const count = form.querySelector("[name=count]").value;
        if(count > 0){
            form.querySelector("[name=count]").value -= 1;
        } else {
            form.querySelector("[name=count]").value = 0;
        }
    })
})

document.querySelectorAll('.plus-button').forEach((button)=>{
    button.addEventListener("click", ()=>{
        const form = button.closest(".form");

        const route = form.querySelector("[name=route]").value;
        const id = form.querySelector("[name=product_id]").value;
        const count = form.querySelector("[name=count]").value;
       
            form.querySelector("[name=count]").value = Number(count) + 1;
       
    })
})



let feed = [
    {
        author: {
            name: 'Shetty ',
            surname: 'Jamie',
            img: 'testimonials3.jpg'
        },
        time: 1583832433393,
        content: {
            text: 'hagsld khfasdfl asldfoa hsdljfa lsdjfjasd',
            background: 'red'
        }
    },
    {
        author: {
            name: 'Patnaik ',
            surname: 'Darcy',
            img: 'testimonials2.jpg'
        },
        time: 1583832433393,
        content: {
            text: 'hagsld khfasdfl asldfoa hsdljfa lsdjfjasd',
            background: 'purple'
        }
    },
    {
        author: {
            name: 'Michiel ',
            surname: 'Huisman',
            img: 'testimonials1.jpg'
        },
        time: 1583832433393,
        content: {
            text: 'hagsld khfasdfl asldfoa hsdljfa lsdjfjasd',
            background: 'green'
        }
    }
];
// console.log(feed);
function testimonials(testimonials){
    let HTML = '';
        document.querySelectorAll('.testimonials-info').innerHTML = HTML;
    for(let i=0; i<testimonials.length; i++){
            const post=testimonials[i];
            // console.log(post.author);
        HTML+=`
        <div class="testimonials-person">
            <div class="testimonials-img">
                <img src="js/img/${post.author.img}" alt="profile-${i+1}">
            </div>
            <div class="span">
                <span>${post.author.name}${post.author.surname}</span>
                <span>Designer</span>
            </div>
            <p>${post.content.text}</p>
        </div>
        `;
    }
    return  document.querySelector('.testimonials-info').innerHTML = HTML;
}
testimonials(feed);

let hero = [
    {
        content: {
                h3: 'Discount fruits at the store 20%',
                h1: '100% natural from the farm',
                p: 'Reach for a healthier you with organic foods.',
                photo: 'slider4.jpg'
            }
    },
    {
        content: {
                h3: 'Discount fruits at the store 20%',
                h1: '100% natural from the farm',
                p: 'Reach for a healthier you with organic foods.',
                photo: 'slider8.jpg'
            }
    },
    {
        content: {
                h3: 'Discount fruits at the store 20%',
                h1: '100% natural from the farm',
                p: 'Reach for a healthier you with organic foods.',
                photo: 'slider9.jpg'
            }
    },
];
function heroText(hero){
    let HTML = '';
    document.querySelectorAll('.swiper-wrapper').innerHTML = HTML;
for(let i=0; i<hero.length; i++){
        const post=hero[i];
    HTML+=`
    <div class="swiper-slide" style="background-image: url('../assets/img/${post.content.photo}');">
        <div class="hero-text">
            <h3>${post.content.h3}</h3>
            <h1>${post.content.h1}</h1>
            <p>${post.content.p}</p>
            <form action="" method="post" class="">
                @csrf
                <button type="submit" class="btn btn-outline-success">Shop now</button>
            </form>
        </div>
    </div>
    `;
    //kaip formuoti su js htmla, kad nerasytu @csrf, bet jis veiktu laravelyje?
}
return  document.querySelector('.swiper-wrapper').innerHTML = HTML;
}
heroText(hero);


//karusele
// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from 'swiper';
import swiper from 'swiper/bundle';
// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

import 'swiper/swiper-bundle.css';
var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    // direction: 'horizontal',
    loop: true,
    effect: 'flip',
    grabCursor: true,
   
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
        speed: 1000,
        spaceBetween: 0,
        grabCursor: false,
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })


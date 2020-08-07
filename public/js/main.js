// let feed = [
//     {
//         author: {
//             name: 'Shetty',
//             surname: 'Jamie',
//             img: 'testimonials3.jpg'
//         },
//         time: 1583832433393,
//         content: {
//             text: 'hagsld khfasdfl asldfoa hsdljfa lsdjfjasd',
//             background: 'red'
//         }
//     },
//     {
//         author: {
//             name: 'Patnaik',
//             surname: 'Darcy',
//             img: 'testimonials2.jpg'
//         },
//         time: 1583832433393,
//         content: {
//             text: 'hagsld khfasdfl asldfoa hsdljfa lsdjfjasd',
//             background: 'purple'
//         }
//     },
//     {
    
//         author: {
//             name: 'Michiel',
//             surname: 'Huisman',
//             img: 'testimonials2.jpg'
//         },
//         time: 1583832433393,
//         content: {
//             text: 'hagsld khfasdfl asldfoa hsdljfa lsdjfjasd',
//             background: 'green'
//         }
//     }

// ];




// // console.log(feed[time]);
// function testimonials(testimonials){
//     let HTML = '';
//     if ( !Array.isArray(testimonials) ) {
//             return console.error('Give me array!!!');
//         }
//         // document.querySelectorAll('.testimonials-info').innerHTML = HTML;
        
//         for(let i=0; i<=testimonials.length; i++){
//             const post=testimonials[i];
//             const pd = post.author.name;
//              console.log(post.author);
//         HTML+=`
//         <div class="testimonials-person">
//             <div class="testimonials-img">
//                 <img src="{{url('assets/img/${pd.img}')}}" alt="profile-${i}">
//             </div>
//             <div class="span">
//                 <span>${pd.name}${pd.surname}</span>
//                 <span>Designer</span>
//             </div>
//             <p>${post.content.text}</p>
//         </div>
//         `;
//     }
//     return  document.querySelectorAll('.testimonials-info').innerHTML = HTML;
// }
// testimonials(feed);

// const input = document.querySelector('.file-input');
// const preview = document.querySelector('.file-preview');
// const fullImage = document.querySelector('.image');
// const likeBtn = document.querySelector('.like-btn');

const root = document.querySelector('.content');

const loginForm = document.querySelector('.login-form');

// console.log(root);

const fetchPage = async (e) => {
    console.log(e);
    e.preventDefault();
    const name = e.target.elements.username.value;
    const password = e.target.elements.password.value;

    const body = { name, password };
    console.log(body);
    try {
        const response = await fetch('/auth')
        const result = await response.json();
        console.log('RESULT: ', result);
    } catch (e) {
        console.log(e);
    }
}

// loginForm.addEventListener('submit', fetchPage)



// if (input) input.onchange = function getPreview(e) {
//     const reader = new FileReader();
//     reader.onload = () => {
//         preview.style.backgroundImage = `url(${reader.result})`;
//     }
//     reader.readAsDataURL(e.target.files[0]);
// }

// document.addEventListener('click', () => {
    // console.log('dsfgdfsg');
// })

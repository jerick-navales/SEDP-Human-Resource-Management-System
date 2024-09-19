document.querySelectorAll('input[type="number"]')(forEach => {
    input.oninput = () => {
        if (input.value.length > input.maxLenght) input.value = input.value.slice(0, input.maxLenght);
    }
});

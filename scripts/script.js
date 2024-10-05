    document.getElementById('addOptionBtn').addEventListener('click', function(e) {
    e.preventDefault();
    
    const optionCount = document.querySelectorAll('.option').length + 1;
    const newOptionWrapper = document.createElement('div');
    newOptionWrapper.classList.add('option-wrapper');
    
    const newOptionInput = document.createElement('input');
    newOptionInput.type = 'text';
    newOptionInput.classList.add('input', 'option');
    newOptionInput.placeholder = `Option ${optionCount}`;
    
    const deleteBtn = document.createElement('button');
    deleteBtn.classList.add('btn-delete');
    deleteBtn.innerHTML = `<img src="media/delete.svg" alt="Delete Icon">`;

    deleteBtn.addEventListener('click', function() {
        newOptionWrapper.remove();
    });

    newOptionWrapper.appendChild(newOptionInput);
    newOptionWrapper.appendChild(deleteBtn);

    document.getElementById('choices').appendChild(newOptionWrapper);
});

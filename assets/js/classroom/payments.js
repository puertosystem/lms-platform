document.addEventListener('DOMContentLoaded', function() {
    const cardsContainer = document.getElementById('cards-container');

    // Función auxiliar para simular estado de carga
    function simulateLoading(btn, callback) {
        const originalText = btn.innerHTML;
        const originalOpacity = btn.style.opacity || '1';
        const originalPointerEvents = btn.style.pointerEvents || 'auto';

        btn.innerHTML = 'Procesando...';
        btn.style.opacity = '0.7';
        btn.style.pointerEvents = 'none';

        setTimeout(function() {
            btn.innerHTML = originalText;
            btn.style.opacity = originalOpacity;
            btn.style.pointerEvents = originalPointerEvents;
            
            if (callback) callback();
        }, 1500);
    }

    // --- Formateo de Input de Tarjeta ---
    const addCardNumberInput = document.getElementById('addCardNumber');
    if (addCardNumberInput) {
        addCardNumberInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, ''); // Eliminar no dígitos
            let formattedValue = '';
            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }
            e.target.value = formattedValue;
        });
    }

    // --- Formateo de Fecha de Expiración ---
    const addCardExpiryInput = document.getElementById('addCardExpiry');
    if (addCardExpiryInput) {
        addCardExpiryInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, ''); // Eliminar no dígitos
            if (value.length > 2) {
                value = value.substring(0, 2) + '/' + value.substring(2, 4);
            }
            e.target.value = value;
        });
        // Limitar longitud
        addCardExpiryInput.setAttribute('maxlength', '5');
    }

    // --- Lógica de Eliminación (Delegación de Eventos) ---
    const deleteModalEl = document.getElementById('deleteCardModal');
    const deleteModal = new bootstrap.Modal(deleteModalEl);
    let cardToDelete = null;
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    
    // Delegar evento click en el contenedor de tarjetas para eliminar
    if (cardsContainer) {
        cardsContainer.addEventListener('click', function(e) {
            const deleteBtn = e.target.closest('.btn-delete-card');
            if (deleteBtn) {
                e.preventDefault();
                cardToDelete = deleteBtn.closest('.card-item-container');
                deleteModal.show();
            }
        });
    }

    if(confirmDeleteBtn) {
        confirmDeleteBtn.addEventListener('click', function() {
            if (cardToDelete) {
                simulateLoading(this, function() {
                    deleteModal.hide();
                    
                    // Efecto visual de eliminación
                    cardToDelete.style.transition = 'all 0.5s ease';
                    cardToDelete.style.opacity = '0';
                    cardToDelete.style.transform = 'scale(0.9)';
                    
                    setTimeout(() => {
                        cardToDelete.remove();
                        cardToDelete = null;
                    }, 500);
                });
            }
        });
    }

    // --- Lógica de Edición (Delegación de Eventos) ---
    const editModalEl = document.getElementById('editCardModal');
    const saveEditCardBtn = document.getElementById('saveEditCardBtn');
    
    // Nota: El botón de editar usa data-bs-toggle, así que Bootstrap abre el modal automáticamente.
    // Si necesitamos poblar datos, podemos agregar lógica aquí.

    if(saveEditCardBtn) {
        saveEditCardBtn.addEventListener('click', function() {
            simulateLoading(this, function() {
                const modalInstance = bootstrap.Modal.getInstance(editModalEl);
                if(modalInstance) modalInstance.hide();
            });
        });
    }

    // --- Lógica de Agregar Tarjeta ---
    const addModalEl = document.getElementById('addCardModal');
    const linkCardBtn = document.getElementById('linkCardBtn');
    
    if(linkCardBtn) {
        linkCardBtn.addEventListener('click', function() {
            const nameInput = document.getElementById('addCardName');
            const numberInput = document.getElementById('addCardNumber');
            const expiryInput = document.getElementById('addCardExpiry');
            
            // Validación básica
            if (!nameInput.value || !numberInput.value || !expiryInput.value) {
                alert('Por favor complete los campos requeridos');
                return;
            }

            simulateLoading(this, function() {
                // Cerrar modal
                const modalInstance = bootstrap.Modal.getInstance(addModalEl);
                if(modalInstance) modalInstance.hide();
                
                // Crear nueva tarjeta
                const last4 = numberInput.value.slice(-4);
                const holderName = nameInput.value.toUpperCase();
                const expiryDate = expiryInput.value;
                
                const newCardHTML = `
                    <div class="col-md-6 col-xl-4 card-item-container">
                        <div class="card border-0 shadow-sm text-white card-visa">
                            <div class="card-body p-4 d-flex flex-column justify-content-between">
                                <div class="d-flex justify-content-between align-items-start">
                                    <i class="ri-visa-line fs-1"></i>
                                    <span class="badge bg-white text-dark rounded-pill px-3 badge-primary-card d-none">Principal</span>
                                </div>
                                <div class="mt-4">
                                    <div class="h3 mb-1 card-number">•••• •••• •••• ${last4}</div>
                                    <div class="d-flex justify-content-between align-items-end mt-3">
                                        <div>
                                            <small class="opacity-75 d-block text-uppercase card-label">Titular</small>
                                            <span class="fw-bold">${holderName}</span>
                                        </div>
                                        <div>
                                            <small class="opacity-75 d-block text-uppercase card-label">Expira</small>
                                            <span class="fw-bold">${expiryDate}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 d-flex gap-2 justify-content-end action-buttons">
                            <button class="edu-btn btn-border btn-small btn-delete-card"><i class="ri-delete-bin-line me-1"></i> Eliminar</button>
                            <button class="edu-btn btn-border btn-small btn-edit-card d-none" data-bs-toggle="modal" data-bs-target="#editCardModal"><i class="ri-pencil-line me-1"></i> Editar</button>
                            <button class="edu-btn btn-border btn-small btn-make-primary">Hacer principal</button>
                        </div>
                    </div>
                `;
                
                // Insertar nueva tarjeta
                cardsContainer.insertAdjacentHTML('beforeend', newCardHTML);
                
                // Limpiar formulario
                nameInput.value = '';
                numberInput.value = '';
                expiryInput.value = '';
                document.getElementById('addCardCvv').value = '';
            });
        });
    }

    // --- Lógica de Hacer Principal (Delegación de Eventos) ---
    // Delegar evento click en el contenedor de tarjetas para "Hacer principal"
    if (cardsContainer) {
        cardsContainer.addEventListener('click', function(e) {
            const makePrimaryBtn = e.target.closest('.btn-make-primary');
            
            if (makePrimaryBtn) {
                e.preventDefault();
                const currentCardContainer = makePrimaryBtn.closest('.card-item-container');
                
                simulateLoading(makePrimaryBtn, function() {
                    // 1. Resetear todas las tarjetas a estado "No principal"
                    const allCards = document.querySelectorAll('.card-item-container');
                    allCards.forEach(card => {
                        // Ocultar badge
                        const badge = card.querySelector('.badge-primary-card');
                        if(badge) badge.classList.add('d-none');
                        
                        // Ocultar botón editar
                        const editBtn = card.querySelector('.btn-edit-card');
                        if(editBtn) editBtn.classList.add('d-none');
                        
                        // Mostrar botón hacer principal
                        const mpBtn = card.querySelector('.btn-make-primary');
                        if(mpBtn) mpBtn.classList.remove('d-none');
                    });

                    // 2. Establecer la tarjeta actual como "Principal"
                    if(currentCardContainer) {
                        // Mostrar badge
                        const badge = currentCardContainer.querySelector('.badge-primary-card');
                        if(badge) badge.classList.remove('d-none');
                        
                        // Mostrar botón editar
                        const editBtn = currentCardContainer.querySelector('.btn-edit-card');
                        if(editBtn) editBtn.classList.remove('d-none');
                        
                        // Ocultar botón hacer principal
                        const mpBtn = currentCardContainer.querySelector('.btn-make-primary');
                        if(mpBtn) mpBtn.classList.add('d-none');
                    }
                });
            }
        });
    }
});
// Clase principal de la aplicación
        class TypeScriptApp {
            constructor() {
                this.frameworks = [
                    {
                        id: 1,
                        name: "NestJS",
                        description: "Framework progresivo para construir aplicaciones server-side eficientes y escalables.",
                        image: "https://nestjs.com/img/logo-small.svg",
                        url: "https://nestjs.com/",
                        popularity: 95
                    },
                    {
                        id: 2,
                        name: "FeathersJS",
                        description: "Framework web ligero para crear aplicaciones en tiempo real y APIs REST.",
                        image: "https://docs.feathersjs.com/img/feathers-logo-wide.png",
                        url: "https://feathersjs.com/",
                        popularity: 85
                    },
                    {
                        id: 3,
                        name: "AdonisJS",
                        description: "Framework MVC full-stack para Node.js con soporte nativo para TypeScript.",
                        image: "https://i.cloudup.com/zfY6lL7eFa-3000x3000.png",
                        url: "https://adonisjs.com/",
                        popularity: 80
                    }
                ];

                this.stats = {
                    codeExecutions: 0,
                    favoriteFrameworks: 0,
                    timeSpent: 0
                };

                this.startTime = Date.now();
                this.init();
            }

            init() {
                this.renderFrameworks();
                this.setupEventListeners();
                this.startTimer();
                this.updateVisitorCount();
            }

            renderFrameworks() {
                const container = document.getElementById('frameworks-container');
                if (!container) return;

                container.innerHTML = '';

                this.frameworks.forEach(framework => {
                    const cardElement = this.createFrameworkCard(framework);
                    container.appendChild(cardElement);
                });
            }

            createFrameworkCard(framework) {
                const card = document.createElement('div');
                card.className = 'card';
                card.dataset.frameworkId = framework.id.toString();
                
                card.innerHTML = `
                    <img src="${framework.image}" class="card-img-top" alt="${framework.name}">
                    <div class="card-body">
                        <h5 class="card-title">${framework.name}</h5>
                        <p class="card-text">${framework.description}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary btn-sm learn-more" data-url="${framework.url}">
                                Aprender más
                            </button>
                            <button class="btn btn-outline-danger btn-sm favorite-btn">
                                ❤️ <span class="favorite-count">0</span>
                            </button>
                        </div>
                        <div class="mt-2">
                            <small class="text-muted">Popularidad: ${framework.popularity}%</small>
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar" style="width: ${framework.popularity}%"></div>
                            </div>
                        </div>
                    </div>
                `;

                return card;
            }

            setupEventListeners() {
                // Playground de TypeScript
                const runButton = document.getElementById('run-ts');
                const inputArea = document.getElementById('ts-input');

                if (runButton && inputArea) {
                    runButton.addEventListener('click', () => {
                        this.executeTypeScriptCode(inputArea.value);
                    });
                }

                // Event delegation para cards dinámicas
                document.addEventListener('click', (event) => {
                    if (event.target.classList.contains('learn-more')) {
                        const url = event.target.dataset.url;
                        this.handleLearnMore(url);
                    }

                    if (event.target.classList.contains('favorite-btn') || 
                        event.target.parentElement?.classList.contains('favorite-btn')) {
                        const button = event.target.classList.contains('favorite-btn') 
                            ? event.target 
                            : event.target.parentElement;
                        this.handleFavorite(button);
                    }
                });

                // Navegación
                document.querySelectorAll('[data-section]').forEach(link => {
                    link.addEventListener('click', (e) => {
                        e.preventDefault();
                        const section = e.target.dataset.section;
                        this.navigateToSection(section);
                    });
                });
            }

            executeTypeScriptCode(code) {
                try {
                    // Simulación de ejecución de TypeScript
                    const result = this.simulateTypeScriptExecution(code);
                    this.displayResult(result);
                    this.updateStats('codeExecutions');
                    this.updateLastAction('Código TypeScript ejecutado');
                } catch (error) {
                    this.displayResult(`Error: ${error.message}`);
                }
            }

            simulateTypeScriptExecution(code) {
                // Simulación básica de ejecución
                const lines = code.split('\n').filter(line => line.trim());
                const results = [];

                for (const line of lines) {
                    if (line.includes('console.log')) {
                        const match = line.match(/console\.log\((.*)\)/);
                        if (match) {
                            try {
                                const expression = match[1];
                                // Evaluación básica y segura
                                if (expression.includes('`')) {
                                    // Template literal básico
                                    const templateMatch = expression.match(/`([^`]*)`/);
                                    if (templateMatch) {
                                        results.push(templateMatch[1]);
                                    }
                                } else {
                                    results.push(expression.replace(/['"]/g, ''));
                                }
                            } catch (e) {
                                results.push('Resultado de console.log');
                            }
                        }
                    } else if (line.includes('let ') || line.includes('const ')) {
                        results.push(`✅ Variable declarada: ${line.trim()}`);
                    }
                }

                return results.length > 0 ? results.join('\n') : 'Código ejecutado exitosamente';
            }

            displayResult(result) {
                const resultDiv = document.getElementById('ts-result');
                const outputContent = document.getElementById('output-content');
                
                if (resultDiv && outputContent) {
                    outputContent.textContent = result;
                    resultDiv.style.display = 'block';
                }
            }

            handleLearnMore(url) {
                this.updateLastAction(`Visitó ${url}`);
                window.open(url, '_blank');
            }

            handleFavorite(button) {
                const countSpan = button.querySelector('.favorite-count');
                if (countSpan) {
                    const currentCount = parseInt(countSpan.textContent) || 0;
                    countSpan.textContent = (currentCount + 1).toString();
                    this.updateStats('favoriteFrameworks');
                    this.updateLastAction('Framework marcado como favorito');
                }
            }

            updateStats(statType) {
                this.stats[statType]++;
                const element = document.getElementById(
                    statType === 'codeExecutions' ? 'code-count' : 'fav-count'
                );
                if (element) {
                    element.textContent = this.stats[statType].toString();
                }
            }

            updateLastAction(action) {
                const element = document.getElementById('last-action');
                if (element) {
                    element.textContent = action;
                }
            }

            startTimer() {
                setInterval(() => {
                    const elapsed = Math.floor((Date.now() - this.startTime) / 1000);
                    const element = document.getElementById('time-spent');
                    if (element) {
                        element.textContent = `${elapsed}s`;
                    }
                }, 1000);
            }

            updateVisitorCount() {
                const count = Math.floor(Math.random() * 1000) + 1;
                const element = document.getElementById('visitor-count');
                if (element) {
                    element.textContent = `Visitante #${count}`;
                }
            }

            navigateToSection(section) {
                this.updateLastAction(`Navegó a sección: ${section}`);
                
                // Simulación de navegación
                const messages = {
                    'datos': 'Explorando tipos de datos en TypeScript',
                    'alias': 'Aprendiendo sobre type aliases',
                    'funciones': 'Descubriendo funciones tipadas'
                };

                const message = messages[section] || 'Navegación realizada';
                
                // Mostrar mensaje temporal
                const statusElement = document.getElementById('app-status');
                if (statusElement) {
                    const originalText = statusElement.textContent;
                    statusElement.textContent = 'Navegando...';
                    statusElement.className = 'badge bg-warning';
                    
                    setTimeout(() => {
                        statusElement.textContent = originalText;
                        statusElement.className = 'badge bg-success';
                    }, 2000);
                }
            }
        }

        // Inicializar la aplicación cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', () => {
            window.tsApp = new TypeScriptApp();
        });

        // Funciones adicionales para demostrar TypeScript
        function demonstrateTypeScript() {
            // Ejemplo de función tipada
            function calculateAge(birthYear) {
                const currentYear = new Date().getFullYear();
                return currentYear - birthYear;
            }

            // Ejemplo de array tipado
            const frameworks = ['Angular', 'React', 'Vue'];
            
            // Ejemplo de objeto tipado
            const developer = {
                name: 'Juan',
                age: calculateAge(1990),
                skills: frameworks
            };

            console.log('TypeScript Demo:', developer);
        }
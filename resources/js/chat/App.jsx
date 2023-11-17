import { StrictMode } from 'react';
import ReactDOM from 'react-dom/client';
import { Provider } from 'react-redux';
import store from './stores/stores';
import { BrowserRouter as Router } from 'react-router-dom';
import RouterApp from './router';
import GlobalStyles from './components/globalStyles';

if (document.getElementById('main')) {
    const main = ReactDOM.createRoot(document.getElementById('main'));

    main.render(
        <StrictMode>
            <GlobalStyles>
                <Provider store={store}>
                    <Router>
                        <RouterApp />
                    </Router>
                </Provider>
            </GlobalStyles>
        </StrictMode>
    );
}

import "@fontsource/roboto/300.css";
import "@fontsource/roboto/400.css";
import "@fontsource/roboto/500.css";
import "@fontsource/roboto/700.css";
import React, { StrictMode } from "react";
import ReactDOM from "react-dom/client";
import { Provider } from "react-redux";
import store from "./stores/stores";
import { RouterProvider } from "react-router-dom";
import router from "./router";
import Sidebar from "./pages/layouts/sidebar";
import Content from "./pages/layouts/main";
import Footer from "./pages/layouts/footer";

if (document.getElementById("main")) {
    const Main = ReactDOM.createRoot(document.getElementById("main"));

    Main.render(
        <StrictMode>
            <Provider store={store}>
                <div>
                    <Sidebar />
                    <div>
                        <Content>
                            <RouterProvider router={router}></RouterProvider>
                        </Content>
                        <Footer/>
                    </div>
                </div>
            </Provider>
        </StrictMode>
    );
}

import routersArray from "../helpers/routers";
import { Routes, Route } from "react-router-dom";
import Main from "../layouts";

const RouterApp = () => {
    return (
        <Routes>
            {routersArray.map((router) => {
                const Page = router.component;
                return (
                    <Route
                        key={router.key}
                        path={router.path}
                        element={<Main><Page/></Main>}
                    />
                );
            })}
        </Routes>
    );
};

export default RouterApp;

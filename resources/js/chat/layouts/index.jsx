import Footer from './footer';
import Header from './header';
import Navigation from './navigation';

const Main = ({ children }) => {
    return (
        <>
            <Header />
            <div>
                <Navigation />
                <div className="content">{children}</div>
            </div>
            <Footer />
        </>
    );
};

export default Main;

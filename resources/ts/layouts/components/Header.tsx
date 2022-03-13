import { Link } from 'react-router-dom'

export const Header: React.VFC = () => {
    return (
        <header className="globalHeader">
            <nav>
                <h1>
                    <img src={'/images/title.png'} alt="PORTFOLIO!" />
                </h1>
                <ul>
                    <li>
                        <Link to="/">
                            <img src="/images/icon01.png" alt="icon01" />
                            <p>Works</p>
                        </Link>
                    </li>
                    <li>
                        <Link to="/about">
                            <img src={'/images/icon02.png'} alt="icon02" />
                            <p>About Me</p>
                        </Link>
                    </li>
                    <li>
                        <Link to="/site">
                            <img src={'/images/icon03.png'} alt="icon03" />
                            <p>This Site</p>
                        </Link>
                    </li>
                    <li>
                        <Link to="/contact">
                            <img src={'/images/icon04.png'} alt="icon04" />
                            <p>Contact</p>
                        </Link>
                    </li>
                </ul>
            </nav>
        </header>
    )
}

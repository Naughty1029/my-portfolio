import { ReactNode } from 'react'
import { Footer } from './components/Footer'
import { Header } from './components/Header'

type Props = {
    children: ReactNode
}

export const CommonLayout: React.VFC<Props> = ({ children }) => {
    return (
        <>
            <Header />
            {children}
            <Footer />
        </>
    )
}

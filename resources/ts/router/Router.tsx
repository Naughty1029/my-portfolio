import { BrowserRouter, Route, Switch } from 'react-router-dom'
import { CommonLayout } from '../layouts/CommonLayout'
import { AboutPage } from '../pages/about'
import { ContactPage } from '../pages/contact'
import { NotFoundPage } from '../pages/notfound'
import { SitePage } from '../pages/site'
import { TopPage } from '../pages/top'

export const Router: React.VFC = () => (
    <BrowserRouter>
        <Switch>
            <Route exact path="/">
                <CommonLayout>
                    <TopPage />
                </CommonLayout>
            </Route>
            <Route exact path="/about">
                <CommonLayout>
                    <AboutPage />
                </CommonLayout>
            </Route>
            <Route exact path="/site">
                <CommonLayout>
                    <SitePage />
                </CommonLayout>
            </Route>
            <Route exact path="/contact">
                <CommonLayout>
                    <ContactPage />
                </CommonLayout>
            </Route>
            <Route>
                <CommonLayout>
                    <NotFoundPage />
                </CommonLayout>
            </Route>
        </Switch>
    </BrowserRouter>
)

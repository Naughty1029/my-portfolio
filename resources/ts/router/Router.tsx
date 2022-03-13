import { BrowserRouter, Route, Switch } from 'react-router-dom'

export const Router: React.VFC = () => (
    <BrowserRouter>
        <Switch>
            <Route exact path="/">
                {/* <Top /> */}
                <div>aaa</div>
            </Route>
        </Switch>
    </BrowserRouter>
)

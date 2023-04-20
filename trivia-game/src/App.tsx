import React, { useContext } from "react";
import "./App.css";
import TriviaGameCard from "./components/triviaGame/TriviaGameCard";
import { Route, Routes } from "react-router-dom";
import FailledResult from "./components/failedResult/FailedResult";
import { Context } from "./ContextProvider";
import PassedResult from "./components/passedResult/PassedResult";

function App() {
  const { score } = useContext(Context);

    return (
        <div className="App">
            <Routes>
                <Route path="/" Component={TriviaGameCard} />
                <Route path="/result" Component={score < 10 ? FailledResult : PassedResult}/>
            </Routes>
        </div>
    );
}

export default App;

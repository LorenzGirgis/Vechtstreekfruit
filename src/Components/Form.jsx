import { useGlobalContext } from "../context";

const Form = () => {
  const { quiz, handleSubmit, handleChange, error } = useGlobalContext();
  return (
    <div className="justify-center flex items-center min-h-screen ">
      <form
        onSubmit={handleSubmit}
        className="bg-white p-5 md:p-8 max-w-[500px] space-y-8 shadow rounded-lg w-11/12 "
      >
        <h2 className="text-3xl font-medium">Vechtstreek fruit quiz</h2>
        <div className="flex flex-col space-y-2">
          <label className="text-gray-600 font-medium" htmlFor="type">
            Selecteer fruitsoort
          </label>
          <select
            id="type"
            name="type"
            className="bg-gray-200 p-2 rounded-md outline-0 focus:bg-gray-300"
            value={quiz.type}
            onChange={handleChange}
           
          >
            <option value="multiple">appels</option>
            <option value="boolean">peren</option>
           
          </select>
        </div>
        <button
          type="submit"
          className="bg-yellow-600 rounde-md w-full p-2 text-white hover:bg-yellow-500"
        >
          Start
        </button>
      </form>
    </div>
  );
};

export default Form;

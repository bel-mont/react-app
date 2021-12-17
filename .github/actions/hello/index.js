const core = require('@actions/core');
const github = require('@actions/github');

try {
  // throw new Error('sample error');

  core.debug('Debug message');
  core.warning('Warning message');
  core.error('Error message');

  const name = core.getInput('who-to-greet');
  const mySecret = 'my-secret';
  core.setSecret(mySecret);
  console.log(`Hello ${name}, ${mySecret}`);

  const time = new Date();
  core.setOutput('time', time.toTimeString());

  core.startGroup('Logging github object');
  console.log(JSON.stringify(github, null, '\t'));
  core.endGroup();
  core.exportVariable('HELLO', 'hello var text');
} catch (error) {
  core.setFailed('panic!', error.message);
}
